@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
@include("common.header")
<body>
  @include("common.nav")
  <div class="container mx-auto px-4 py-8">
    <div class="max-w-5xl mx-auto">
      <h1 class="text-3xl md:text-5xl font-bold text-center mb-2 text-blue-900 drop-shadow-sm">Weather Information</h1>
      <p class="text-center text-gray-700 mb-8 text-lg">Check the weather conditions before your power hang gliding session</p>
    
      <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Current Weather -->
          <div class="bg-blue-50 rounded-lg p-4">
            <h2 class="text-2xl font-semibold text-blue-800 mb-4">Current Conditions</h2>
            <div class="flex items-center mb-4">
              <div class="text-5xl font-bold text-blue-900">{{ $currentTemp }}°C</div>
              <div class="ml-4">
                <div class="text-lg font-medium">{{ $weatherDescription }}</div>
                <div class="text-gray-600">Feels like {{ $feelsLike }}°C</div>
              </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-6">
              <div>
                <p class="text-gray-600">Wind</p>
                <p class="font-medium">{{ $windSpeed }} km/h {{ $windDirection }}</p>
              </div>
              <div>
                <p class="text-gray-600">Gusts</p>
                <p class="font-medium">{{ $windGusts }} km/h</p>
              </div>
              <div>
                <p class="text-gray-600">Visibility</p>
                <p class="font-medium">{{ $visibility }} km</p>
              </div>
              <div>
                <p class="text-gray-600">Humidity</p>
                <p class="font-medium">{{ $humidity }}%</p>
              </div>
            </div>
          </div>
          
          <!-- Flight Safety -->
          <div class="bg-blue-50 rounded-lg p-4">
            <h2 class="text-2xl font-semibold text-blue-800 mb-4">Flight Safety</h2>
            <div class="mb-4">
              <div class="flex items-center">
                <div class="w-1/3 text-gray-600">Overall</div>
                <div class="w-2/3">
                  <span class="px-3 py-1 rounded-full text-white {{ $flightSafety === 'Good' ? 'bg-green-500' : ($flightSafety === 'Moderate' ? 'bg-yellow-500' : 'bg-red-500') }}">
                    {{ $flightSafety }}
                  </span>
                </div>
              </div>
            </div>
            <div class="space-y-2">
              <div class="flex items-center">
                <div class="w-1/3 text-gray-600">Wind</div>
                <div class="w-2/3">
                  <div class="h-2 bg-gray-200 rounded-full">
                    <div class="h-2 bg-{{ $windSafetyColor }}-500 rounded-full" style="width: {{ $windSafetyPercent }}%"></div>
                  </div>
                </div>
              </div>
              <div class="flex items-center">
                <div class="w-1/3 text-gray-600">Visibility</div>
                <div class="w-2/3">
                  <div class="h-2 bg-gray-200 rounded-full">
                    <div class="h-2 bg-{{ $visibilitySafetyColor }}-500 rounded-full" style="width: {{ $visibilitySafetyPercent }}%"></div>
                  </div>
                </div>
              </div>
              <div class="flex items-center">
                <div class="w-1/3 text-gray-600">Thermals</div>
                <div class="w-2/3">
                  <div class="h-2 bg-gray-200 rounded-full">
                    <div class="h-2 bg-{{ $thermalSafetyColor }}-500 rounded-full" style="width: {{ $thermalSafetyPercent }}%"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-4 p-3 {{ $warningClass }} rounded-lg" style="display: {{ $hasWarning ? 'block' : 'none' }}">
              <p class="font-medium">{{ $warningMessage }}</p>
            </div>
          </div>
        </div>
        
        <!-- Forecast -->
        <div class="mt-8">
          <h2 class="text-2xl font-semibold text-blue-800 mb-4">Hourly Forecast</h2>
          <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
            @foreach($hourlyForecast as $hour)
            <div class="bg-blue-50 rounded-lg p-3 text-center">
              <p class="font-medium">{{ $hour['time'] }}</p>
              <div class="my-2">
                <span class="text-xl font-bold">{{ $hour['temp'] }}°C</span>
              </div>
              <p class="text-sm">Wind: {{ $hour['wind'] }} km/h</p>
              <p class="text-sm">Gusts: {{ $hour['gusts'] }} km/h</p>
              <p class="mt-2">
                <span class="px-2 py-1 rounded-full text-xs text-white {{ $hour['safety'] === 'Good' ? 'bg-green-500' : ($hour['safety'] === 'Moderate' ? 'bg-yellow-500' : 'bg-red-500') }}">
                  {{ $hour['safety'] }}
                </span>
              </p>
            </div>
            @endforeach
          </div>
        </div>
        
        <!-- Launch Sites -->
        <div class="mt-8">
          <h2 class="text-2xl font-semibold text-blue-800 mb-4">Launch Sites Conditions</h2>
          <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
              <thead>
                <tr>
                  <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Site</th>
                  <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Wind</th>
                  <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Gusts</th>
                  <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Direction</th>
                  <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($launchSites as $site)
                <tr>
                  <td class="py-2 px-4 border-b border-gray-200">{{ $site['name'] }}</td>
                  <td class="py-2 px-4 border-b border-gray-200">{{ $site['wind'] }} km/h</td>
                  <td class="py-2 px-4 border-b border-gray-200">{{ $site['gusts'] }} km/h</td>
                  <td class="py-2 px-4 border-b border-gray-200">{{ $site['direction'] }}</td>
                  <td class="py-2 px-4 border-b border-gray-200">
                    <span class="px-2 py-1 rounded-full text-xs text-white {{ $site['status'] === 'Good' ? 'bg-green-500' : ($site['status'] === 'Moderate' ? 'bg-yellow-500' : 'bg-red-500') }}">
                      {{ $site['status'] }}
                    </span>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        
        <!-- 7-Day Forecast -->
        <div class="mt-8">
          <h2 class="text-2xl font-semibold text-blue-800 mb-4">7-Day Forecast</h2>
          <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-7 divide-y md:divide-y-0 md:divide-x divide-gray-200">
              @foreach($dailyForecast as $day)
              <div class="p-4">
                <div class="text-center">
                  <p class="font-bold text-gray-700">{{ $day['day'] }}</p>
                  <p class="text-sm text-gray-500">{{ $day['date'] }}</p>
                  <div class="my-2">
                    <span class="text-xl font-bold text-blue-900">{{ $day['highTemp'] }}°</span>
                    <span class="text-gray-500">/{{ $day['lowTemp'] }}°</span>
                  </div>
                  <div class="flex flex-col space-y-1 mt-2">
                    <div class="flex justify-between text-sm">
                      <span class="text-gray-600">Wind:</span>
                      <span>{{ $day['windSpeed'] }} km/h</span>
                    </div>
                    <div class="flex justify-between text-sm">
                      <span class="text-gray-600">Gusts:</span>
                      <span>{{ $day['windGusts'] }} km/h</span>
                    </div>
                    <div class="flex justify-between text-sm">
                      <span class="text-gray-600">Precip:</span>
                      <span>{{ $day['precipitation'] }}%</span>
                    </div>
                  </div>
                  <p class="text-xs text-gray-600 mt-2">{{ $day['description'] }}</p>
                  <div class="mt-3">
                    <span class="px-2 py-1 rounded-full text-xs text-white {{ $day['safety'] === 'Good' ? 'bg-green-500' : ($day['safety'] === 'Moderate' ? 'bg-yellow-500' : 'bg-red-500') }}">
                      {{ $day['safety'] }}
                    </span>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold text-blue-800 mb-4">Weather Safety Tips</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <h3 class="text-lg font-medium text-blue-700 mb-2">Wind Conditions</h3>
            <ul class="list-disc pl-5 space-y-1">
              <li>Ideal wind speed: 10-25 km/h</li>
              <li>Avoid flying in gusts over 30 km/h</li>
              <li>Be cautious of changing wind directions</li>
              <li>Check for turbulence and rotors near terrain</li>
            </ul>
          </div>
          <div>
            <h3 class="text-lg font-medium text-blue-700 mb-2">Visibility & Clouds</h3>
            <ul class="list-disc pl-5 space-y-1">
              <li>Maintain minimum 5km visibility</li>
              <li>Stay clear of clouds by at least 300m</li>
              <li>Watch for approaching weather fronts</li>
              <li>Be aware of valley fog development</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include("common.footer")
</body>
</html>
@endsection