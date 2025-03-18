<?php

namespace App\Http\Controllers;

use App\Models\ChatMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class ChatBotController extends Controller
{
    /**
     * Initial chat bot configuration and responses
     */
    private $responses = [
        'greeting' => [
            'message' => "👋 Welcome to Power Hang Glider! How can I assist you today?",
            'options' => [
                "Tell me about training courses",
                "What products do you offer?",
                "Check weather conditions",
                "Book a session"
            ]
        ],
        'weather' => [
            'current' => [
                'message' => "Here are the current weather conditions for flying:\n\n" .
                            "🌡️ Temperature: 22°C\n" .
                            "💨 Wind Speed: 12 km/h\n" .
                            "🧭 Wind Direction: North-East\n" .
                            "☁️ Cloud Cover: Partly Cloudy\n" .
                            "👍 Flying Conditions: Favorable\n\n" .
                            "Would you like to know more about flying conditions?",
                'options' => [
                    "View detailed forecast",
                    "Check flying safety tips",
                    "Book a training session",
                    "Contact an instructor"
                ]
            ]
        ],
        'products' => [
            'general' => [
                'message' => "We offer a range of high-quality hang gliding products:\n\n" .
                            "🛡️ Power Hang Gliders\n" .
                            "- Sport Series (Entry Level)\n" .
                            "- Pro Series (Advanced)\n" .
                            "- Elite Series (Professional)\n\n" .
                            "🪖 Safety Equipment\n" .
                            "- Helmets\n" .
                            "- Harnesses\n" .
                            "- Reserve Parachutes\n\n" .
                            "📱 Accessories\n" .
                            "- Communication Devices\n" .
                            "- Flight Instruments\n" .
                            "- Storage Cases",
                'options' => [
                    "View Sport Series details",
                    "View Pro Series details",
                    "View Elite Series details",
                    "Check safety equipment"
                ]
            ],
            'sport' => [
                'message' => "Sport Series - Perfect for Beginners:\n\n" .
                            "✅ Easy to control\n" .
                            "✅ Enhanced safety features\n" .
                            "✅ Durable construction\n" .
                            "✅ Beginner-friendly design\n\n" .
                            "Starting from $5,999",
                'options' => [
                    "Book a test flight",
                    "View specifications",
                    "Check availability",
                    "Contact sales team"
                ]
            ]
        ],
        'training' => [
            'general' => [
                'message' => "Our training programs cater to all skill levels:\n\n" .
                            "🌟 Beginner Course (2 weeks)\n" .
                            "- Basic flight principles\n" .
                            "- Safety procedures\n" .
                            "- Ground handling\n\n" .
                            "🏆 Advanced Course (1 week)\n" .
                            "- Advanced maneuvers\n" .
                            "- Cross-country flying\n" .
                            "- Weather analysis\n\n" .
                            "💪 Professional Course (2 weeks)\n" .
                            "- Competition techniques\n" .
                            "- Advanced navigation\n" .
                            "- Emergency procedures",
                'options' => [
                    "Learn about Beginner Course",
                    "Learn about Advanced Course",
                    "Check course schedule",
                    "Contact an instructor"
                ]
            ]
        ],
        'booking' => [
            'message' => "Ready to book your session? Choose from:\n\n" .
                        "📅 Training Sessions\n" .
                        "🛠️ Equipment Trial\n" .
                        "👨‍🏫 Private Consultation\n" .
                        "🎯 Guided Flight",
            'options' => [
                "Book training session",
                "Schedule equipment trial",
                "Request consultation",
                "Check availability"
            ]
        ],
        'fallback' => [
            'message' => "I'm here to help! Please choose one of these options:",
            'options' => [
                "Check training courses",
                "View our products",
                "Check weather conditions",
                "Contact support team"
            ]
        ]
    ];

    /**
     * Initialize a new chat session
     */
    public function startChat()
    {
        try {
            $sessionId = Str::uuid();
            
            // Store initial message
            ChatMessage::create([
                'session_id' => $sessionId,
                'type' => 'bot',
                'message' => $this->responses['greeting']['message']
            ]);

            return response()->json([
                'session_id' => $sessionId,
                'message' => $this->responses['greeting']['message'],
                'options' => $this->responses['greeting']['options']
            ]);
        } catch (\Exception $e) {
            Log::error('Error starting chat:', ['error' => $e->getMessage()]);
            return response()->json([
                'message' => 'Failed to start chat session',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Process user message and return bot response
     */
    public function sendMessage(Request $request)
    {
        try {
            $request->validate([
                'session_id' => 'required|string',
                'message' => 'required|string'
            ]);

            Log::info('Received message:', $request->all());

            // Store user message
            ChatMessage::create([
                'session_id' => $request->session_id,
                'type' => 'user',
                'message' => $request->message
            ]);

            // Process the message and get response
            $response = $this->processMessage($request->message);

            Log::info('Generated response:', $response);

            // Store bot response
            ChatMessage::create([
                'session_id' => $request->session_id,
                'type' => 'bot',
                'message' => $response['message'],
                'context' => ['options' => $response['options'] ?? []]
            ]);

            return response()->json($response);
        } catch (\Exception $e) {
            Log::error('Error processing message:', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'message' => 'I apologize, but I encountered an error. Please try again.',
                'options' => $this->responses['fallback']['options']
            ], 500);
        }
    }

    /**
     * Get chat history for a session
     */
    public function getChatHistory($sessionId)
    {
        try {
            $messages = ChatMessage::where('session_id', $sessionId)
                ->orderBy('created_at', 'asc')
                ->get();

            return response()->json(['messages' => $messages]);
        } catch (\Exception $e) {
            Log::error('Error fetching chat history:', ['error' => $e->getMessage()]);
            return response()->json([
                'message' => 'Failed to fetch chat history',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Process user message and determine appropriate response
     */
    private function processMessage($message)
    {
        $message = strtolower(trim($message));

        // Greeting patterns
        if (preg_match('/(hello|hi|hey|greetings)/i', $message)) {
            return $this->responses['greeting'];
        }

        // Weather related queries
        if (preg_match('/(weather|condition|forecast|wind|temperature)/i', $message)) {
            return $this->responses['weather']['current'];
        }

        // Product related queries
        if (preg_match('/(product|glider|equipment|price|cost|buy)/i', $message)) {
            return $this->responses['products']['general'];
        }

        // Training related queries
        if (preg_match('/(train|course|learn|class|lesson|study|teach)/i', $message)) {
            return $this->responses['training']['general'];
        }

        // Booking related queries
        if (preg_match('/(book|schedule|appointment|reservation|register|sign up)/i', $message)) {
            return $this->responses['booking'];
        }

        Log::info('Unmatched message:', ['message' => $message]);
        return $this->responses['fallback'];
    }
}
