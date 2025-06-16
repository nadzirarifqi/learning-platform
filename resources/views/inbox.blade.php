<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="space-y-6">
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-medium text-gray-900">Inbox</h2>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                        3 unread
                    </span>
                </div>
                <p class="text-gray-600 mb-6">
                    Your messages and notifications will appear here.
                </p>
                
                <!-- Sample inbox items -->
                <div class="space-y-4">
                    <div class="border border-gray-200 rounded-lg p-4 hover:bg-gray-50 cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                                <x-heroicon-o-envelope class="h-5 w-5 text-gray-400" />
                                <div>
                                    <p class="font-medium text-gray-900">New project invitation</p>
                                    <p class="text-sm text-gray-500">You've been invited to join the Design System project</p>
                                </div>
                            </div>
                            <span class="text-sm text-gray-400">2 hours ago</span>
                        </div>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-4 hover:bg-gray-50 cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <x-heroicon-o-check-circle class="h-5 w-5 text-green-400" />
                                <div>
                                    <p class="font-medium text-gray-900">Task completed</p>
                                    <p class="text-sm text-gray-500">John Doe completed the wireframe task</p>
                                </div>
                            </div>
                            <span class="text-sm text-gray-400">4 hours ago</span>
                        </div>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-4 hover:bg-gray-50 cursor-pointer bg-gray-50">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                                <x-heroicon-o-information-circle class="h-5 w-5 text-gray-400" />
                                <div>
                                    <p class="font-medium text-gray-700">System update</p>
                                    <p class="text-sm text-gray-500">New features have been added to your dashboard</p>
                                </div>
                            </div>
                            <span class="text-sm text-gray-400">1 day ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>