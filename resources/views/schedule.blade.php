<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="space-y-6">
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-medium text-gray-900">Calendar</h2>
                    <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                        <x-heroicon-o-plus class="h-4 w-4 mr-2" />
                        Add Event
                    </button>
                </div>
                <p class="text-gray-600 mb-6">
                    Manage your schedule and upcoming events.
                </p>
                
                <!-- Calendar header -->
                <div class="mb-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">December 2023</h3>
                        <div class="flex space-x-2">
                            <button class="p-2 hover:bg-gray-100 rounded-md">
                                <x-heroicon-o-chevron-left class="h-5 w-5" />
                            </button>
                            <button class="p-2 hover:bg-gray-100 rounded-md">
                                <x-heroicon-o-chevron-right class="h-5 w-5" />
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Simple calendar view -->
                <div class="grid grid-cols-7 gap-1 text-center text-sm mb-8">
                    <!-- Calendar header -->
                    <div class="font-semibold text-gray-900 py-2">Sun</div>
                    <div class="font-semibold text-gray-900 py-2">Mon</div>
                    <div class="font-semibold text-gray-900 py-2">Tue</div>
                    <div class="font-semibold text-gray-900 py-2">Wed</div>
                    <div class="font-semibold text-gray-900 py-2">Thu</div>
                    <div class="font-semibold text-gray-900 py-2">Fri</div>
                    <div class="font-semibold text-gray-900 py-2">Sat</div>
                    
                    <!-- Calendar days -->
                    @for($i = 1; $i <= 35; $i++)
                        <div class="py-2 px-1 hover:bg-gray-100 rounded cursor-pointer {{ $i == 15 ? 'bg-blue-500 text-white hover:bg-blue-600' : 'text-gray-700' }}">
                            {{ $i <= 30 ? $i : '' }}
                        </div>
                    @endfor
                </div>
                
                <!-- Upcoming events -->
                <div>
                    <h3 class="text-md font-medium text-gray-900 mb-4">Upcoming Events</h3>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3 p-3 bg-blue-50 rounded-lg">
                            <x-heroicon-o-calendar class="h-5 w-5 text-blue-500" />
                            <div class="flex-1">
                                <p class="font-medium text-blue-900">Team Meeting</p>
                                <p class="text-sm text-blue-600">Today at 2:00 PM</p>
                            </div>
                            <button class="text-blue-600 hover:text-blue-800">
                                <x-heroicon-o-pencil class="h-4 w-4" />
                            </button>
                        </div>
                        <div class="flex items-center space-x-3 p-3 bg-green-50 rounded-lg">
                            <x-heroicon-o-calendar class="h-5 w-5 text-green-500" />
                            <div class="flex-1">
                                <p class="font-medium text-green-900">Project Review</p>
                                <p class="text-sm text-green-600">Tomorrow at 10:00 AM</p>
                            </div>
                            <button class="text-green-600 hover:text-green-800">
                                <x-heroicon-o-pencil class="h-4 w-4" />
                            </button>
                        </div>
                        <div class="flex items-center space-x-3 p-3 bg-purple-50 rounded-lg">
                            <x-heroicon-o-calendar class="h-5 w-5 text-purple-500" />
                            <div class="flex-1">
                                <p class="font-medium text-purple-900">Client Presentation</p>
                                <p class="text-sm text-purple-600">Friday at 3:00 PM</p>
                            </div>
                            <button class="text-purple-600 hover:text-purple-800">
                                <x-heroicon-o-pencil class="h-4 w-4" />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
