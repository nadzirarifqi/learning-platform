<x-layout title="Search">
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="space-y-6">
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h2 class="text-lg font-medium text-gray-900 mb-4">Search</h2>
                
                <!-- Search form -->
                <div class="mb-6">
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <x-heroicon-o-magnifying-glass class="h-5 w-5 text-gray-400" />
                        </div>
                        <input type="text" 
                               placeholder="Search projects, files, people..." 
                               class="block w-full rounded-md border-0 py-3 pl-10 pr-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                
                <!-- Search filters -->
                <div class="flex space-x-4 mb-6">
                    <button class="px-4 py-2 bg-blue-100 text-blue-800 rounded-lg text-sm font-medium">All</button>
                    <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-200">Projects</button>
                    <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-200">Files</button>
                    <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-200">People</button>
                </div>
                
                <!-- Search results -->
                <div class="space-y-4">
                    <div class="border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                        <div class="flex items-start space-x-3">
                            <x-heroicon-o-folder class="h-5 w-5 text-blue-500 mt-1" />
                            <div>
                                <h3 class="font-medium text-gray-900">Design System Project</h3>
                                <p class="text-sm text-gray-500">A comprehensive design system for our products...</p>
                                <span class="text-xs text-gray-400">Updated 2 days ago</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                        <div class="flex items-start space-x-3">
                            <x-heroicon-o-user class="h-5 w-5 text-green-500 mt-1" />
                            <div>
                                <h3 class="font-medium text-gray-900">John Doe</h3>
                                <p class="text-sm text-gray-500">Senior Designer - john.doe@company.com</p>
                                <span class="text-xs text-gray-400">Active 1 hour ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>