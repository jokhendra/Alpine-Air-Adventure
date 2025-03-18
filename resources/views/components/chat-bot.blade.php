<div 
    x-data="chatBot"
    x-init="init()"
    class="fixed bottom-2.5 right-4 z-50"
    x-cloak
>
    <!-- Chat Button -->
    <button 
        x-show="!isChatOpen" 
        @click="openChat()" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90"
        class="bg-amber-600 hover:bg-amber-700 text-white rounded-full p-4 shadow-xl transition-all duration-300 transform hover:scale-110 hover:rotate-3 focus:outline-none focus:ring-4 focus:ring-amber-500 focus:ring-opacity-50"
    >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
        </svg>
        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center animate-pulse">1</span>
    </button>

    <!-- Chat Window -->
    <div 
        x-show="isChatOpen" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-y-4"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform translate-y-4"
        class="fixed bottom-14 right-4 bg-white rounded-2xl shadow-2xl w-96 h-[700px] flex flex-col overflow-hidden border border-gray-200"
        @click.away="closeChat()"
    >
        <!-- Chat Header -->
        <div class="bg-gradient-to-r from-amber-600 to-amber-700 text-white p-4 rounded-t-2xl flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="h-10 w-10 rounded-full bg-white p-1 flex items-center justify-center shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-lg">Power Hang Glider</h3>
                    <div class="flex items-center text-amber-100 text-sm">
                        <span class="h-2 w-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                        Online | Typically replies in minutes
                    </div>
                </div>
            </div>
            <button @click="closeChat()" class="text-white hover:text-amber-200 transition-colors focus:outline-none focus:ring-2 focus:ring-amber-300 rounded-lg p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Chat Messages -->
        <div class="flex-1 overflow-y-auto p-4 space-y-4 bg-gradient-to-b from-amber-50/50 to-white" id="chat-messages" x-ref="messageContainer">
            <template x-for="(message, index) in chatMessages" :key="index">
                <div :class="{'flex flex-col': true, 'items-end': message.type === 'user'}" 
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100">
                    <div class="flex items-start" :class="{'flex-row-reverse': message.type === 'user'}">
                        <div x-show="message.type === 'bot'" class="flex-shrink-0 h-8 w-8 rounded-full bg-gradient-to-br from-amber-500 to-amber-600 flex items-center justify-center mr-2 shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </div>
                        <div :class="{
                            'rounded-2xl p-4 max-w-[80%] shadow-md': true,
                            'bg-gradient-to-br from-amber-600 to-amber-700 text-white': message.type === 'user',
                            'bg-white border border-gray-100': message.type === 'bot'
                        }">
                            <p class="text-sm whitespace-pre-wrap leading-relaxed" x-text="message.message"></p>
                            <template x-if="message.type === 'bot' && message.options && message.options.length > 0">
                                <div class="mt-3 space-y-2">
                                    <template x-for="(option, optionIndex) in message.options" :key="optionIndex">
                                        <button 
                                            @click="sendMessage(option)"
                                            class="block w-full text-left text-sm text-amber-700 hover:text-amber-800 bg-amber-50 hover:bg-amber-100 rounded-lg p-3 transition-colors duration-200 border border-amber-100"
                                            x-text="option">
                                        </button>
                                    </template>
                                </div>
                            </template>
                        </div>
                    </div>
                    <div x-show="message.type === 'bot'" class="text-xs text-gray-500 ml-10 mt-1 flex items-center">
                        <span class="mr-1">Power Hang Glider Support</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </template>
            <!-- Typing Indicator -->
            <div x-show="isTyping" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                class="flex items-center space-x-2">
                <div class="bg-white rounded-full p-3 shadow-md border border-gray-100">
                    <div class="flex space-x-1">
                        <div class="h-2 w-2 bg-amber-600 rounded-full animate-bounce"></div>
                        <div class="h-2 w-2 bg-amber-600 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                        <div class="h-2 w-2 bg-amber-600 rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Replies -->
        <div class="border-t border-gray-100 p-4 bg-gradient-to-b from-white to-gray-50">
            <div class="flex flex-wrap gap-2">
                <button 
                    @click="sendMessage('Tell me about training courses')"
                    class="text-sm bg-white shadow-sm border border-amber-200 text-amber-700 px-4 py-2 rounded-full hover:bg-amber-50 hover:border-amber-300 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50 transform hover:scale-105">
                    🎯 Training Courses
                </button>
                <button 
                    @click="sendMessage('What products do you offer?')"
                    class="text-sm bg-white shadow-sm border border-amber-200 text-amber-700 px-4 py-2 rounded-full hover:bg-amber-50 hover:border-amber-300 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50 transform hover:scale-105">
                    🛡️ Products
                </button>
                <button 
                    @click="sendMessage('Check weather conditions')"
                    class="text-sm bg-white shadow-sm border border-amber-200 text-amber-700 px-4 py-2 rounded-full hover:bg-amber-50 hover:border-amber-300 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50 transform hover:scale-105">
                    🌤️ Weather Info
                </button>
            </div>
        </div>

        <!-- Chat Input -->
        <div class="border-t border-gray-100 p-4 bg-white">
            <form @submit.prevent="handleSubmit" class="flex gap-2">
                <input 
                    type="text" 
                    x-model="newMessage" 
                    placeholder="Type your message..." 
                    class="flex-1 border border-gray-200 rounded-full px-6 py-3 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent text-gray-600 placeholder-gray-400"
                >
                <button 
                    type="submit" 
                    class="bg-gradient-to-r from-amber-600 to-amber-700 hover:from-amber-700 hover:to-amber-800 text-white rounded-full px-6 py-3 transition-all duration-300 flex items-center space-x-2 shadow-lg hover:shadow-xl transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50 disabled:opacity-50 disabled:cursor-not-allowed"
                    :disabled="isTyping"
                >
                    <span>Send</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>

@push('styles')
<style>
[x-cloak] { display: none !important; }

/* Custom scrollbar */
#chat-messages::-webkit-scrollbar {
    width: 6px;
}

#chat-messages::-webkit-scrollbar-track {
    background: transparent;
}

#chat-messages::-webkit-scrollbar-thumb {
    background-color: rgba(217, 119, 6, 0.3);
    border-radius: 20px;
}

#chat-messages::-webkit-scrollbar-thumb:hover {
    background-color: rgba(217, 119, 6, 0.5);
}

/* Message animations */
@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.message-animation {
    animation: slideIn 0.3s ease-out;
}
</style>
@endpush

@push('scripts')
<script src="https://www.paypal.com/sdk/js?client-id={{ config('paypal.sandbox.client_id') }}&currency=USD"></script>
<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('chatBot', () => ({
        isChatOpen: false,
        chatMessages: [],
        newMessage: '',
        isTyping: false,
        bookingData: {
            service_type: '',
            booking_date: '',
            start_time: '',
            duration: 1,
            notes: ''
        },
        availableSlots: [],
        selectedService: null,
        showBookingForm: false,

        responses: {
            greeting: {
                message: "👋 Welcome to Power Hang Glider! How can I assist you today?",
                options: [
                    "Tell me about training courses",
                    "What products do you offer?",
                    "Check weather conditions",
                    "Book a session"
                ]
            },
            weather: {
                message: "Here are the current weather conditions for flying:\n\n" +
                        "🌡️ Temperature: 22°C\n" +
                        "💨 Wind Speed: 12 km/h\n" +
                        "🧭 Wind Direction: North-East\n" +
                        "☁️ Cloud Cover: Partly Cloudy\n" +
                        "👍 Flying Conditions: Favorable\n\n" +
                        "Would you like to know more about flying conditions?",
                options: [
                    "View detailed forecast",
                    "Check flying safety tips",
                    "Book a training session",
                    "Contact an instructor"
                ]
            },
            products: {
                message: "We offer a range of high-quality hang gliding products:\n\n" +
                        "🛡️ Power Hang Gliders\n" +
                        "- Sport Series (Entry Level)\n" +
                        "- Pro Series (Advanced)\n" +
                        "- Elite Series (Professional)\n\n" +
                        "🪖 Safety Equipment\n" +
                        "- Helmets\n" +
                        "- Harnesses\n" +
                        "- Reserve Parachutes\n\n" +
                        "📱 Accessories\n" +
                        "- Communication Devices\n" +
                        "- Flight Instruments\n" +
                        "- Storage Cases",
                options: [
                    "View Sport Series details",
                    "View Pro Series details",
                    "View Elite Series details",
                    "Check safety equipment"
                ]
            },
            training: {
                message: "Our training programs cater to all skill levels:\n\n" +
                        "🌟 Beginner Course (2 weeks)\n" +
                        "- Basic flight principles\n" +
                        "- Safety procedures\n" +
                        "- Ground handling\n\n" +
                        "🏆 Advanced Course (1 week)\n" +
                        "- Advanced maneuvers\n" +
                        "- Cross-country flying\n" +
                        "- Weather analysis\n\n" +
                        "💪 Professional Course (2 weeks)\n" +
                        "- Competition techniques\n" +
                        "- Advanced navigation\n" +
                        "- Emergency procedures",
                options: [
                    "Learn about Beginner Course",
                    "Learn about Advanced Course",
                    "Check course schedule",
                    "Contact an instructor"
                ]
            },
            booking: {
                message: "What type of session would you like to book?\n\n" +
                        "🎯 Training Session ($150/hour)\n" +
                        "🛠️ Equipment Trial ($100/hour)\n" +
                        "👨‍🏫 Private Consultation ($75/hour)\n" +
                        "✈️ Guided Flight ($200/hour)",
                options: [
                    "Book Training Session",
                    "Book Equipment Trial",
                    "Book Private Consultation",
                    "Book Guided Flight"
                ]
            },
            fallback: {
                message: "I'm here to help! Please choose one of these options:",
                options: [
                    "Check training courses",
                    "View our products",
                    "Check weather conditions",
                    "Contact support team"
                ]
            }
        },

        init() {
            this.chatMessages = [];
            console.log('Chat component initialized');
        },

        openChat() {
            console.log('Opening chat...');
            this.isChatOpen = true;
            if (this.chatMessages.length === 0) {
                this.addBotMessage(this.responses.greeting.message, this.responses.greeting.options);
            }
        },

        closeChat() {
            console.log('Closing chat...');
            this.isChatOpen = false;
        },

        addBotMessage(message, options = []) {
            console.log('Adding bot message:', { message, options });
            this.chatMessages.push({
                type: 'bot',
                message: message,
                options: options,
                id: Date.now()
            });
            this.$nextTick(() => {
                this.scrollToBottom();
            });
        },

        addUserMessage(message) {
            console.log('Adding user message:', message);
            this.chatMessages.push({
                type: 'user',
                message: message,
                id: Date.now()
            });
            this.$nextTick(() => {
                this.scrollToBottom();
            });
        },

        handleSubmit() {
            if (this.newMessage.trim()) {
                this.sendMessage(this.newMessage);
                this.newMessage = '';
            }
        },

        processMessage(message) {
            message = message.toLowerCase().trim();
            
            // Greeting patterns
            if (/(hello|hi|hey|greetings)/i.test(message)) {
                return this.responses.greeting;
            }

            // Weather related queries
            if (/(weather|condition|forecast|wind|temperature)/i.test(message)) {
                return this.responses.weather;
            }

            // Product related queries
            if (/(product|glider|equipment|price|cost|buy)/i.test(message)) {
                return this.responses.products;
            }

            // Training related queries
            if (/(train|course|learn|class|lesson|study|teach)/i.test(message)) {
                return this.responses.training;
            }

            // Booking related queries
            if (/(book|schedule|appointment|reservation|register|sign up)/i.test(message)) {
                return this.responses.booking;
            }

            return this.responses.fallback;
        },

        async sendMessage(message) {
            if (!message.trim() || this.isTyping) {
                return;
            }

            const userMessage = message.trim();
            this.addUserMessage(userMessage);
            this.isTyping = true;

            try {
                if (userMessage.startsWith('Book ')) {
                    await this.initializeBooking(userMessage);
                } else if (userMessage.includes('hour')) {
                    await this.handleDurationSelection(userMessage.split(' ')[0]);
                } else if (userMessage.startsWith('Book for ')) {
                    await this.handleTimeSelection(userMessage);
                } else if (['No notes needed', 'Add notes'].includes(userMessage)) {
                    await this.handleNotesOption(userMessage);
                } else if (this.bookingData.service_type && !this.bookingData.notes) {
                    this.bookingData.notes = userMessage;
                    await this.proceedToBooking();
                } else {
                    const response = this.processMessage(userMessage);
                    this.addBotMessage(response.message, response.options);
                }
            } catch (error) {
                console.error('Error processing message:', error);
                this.addBotMessage(
                    "I apologize, but I'm having trouble processing your request. Please try again or contact our support team.",
                    this.responses.fallback.options
                );
            } finally {
                this.isTyping = false;
            }
        },

        scrollToBottom() {
            const container = this.$refs.messageContainer;
            if (container) {
                container.scrollTop = container.scrollHeight;
            }
        },

        // ... rest of the methods remain unchanged ...
    }));
});
</script>
@endpush 