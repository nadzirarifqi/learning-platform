<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="space-y-6">
        <!-- Welcome Section -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h2 class="text-lg font-medium text-gray-900 mb-2">Welcome back!</h2>
                <p class="text-gray-600">
                    Here's what's happening with your account today. The sidebar is fully responsive and includes all the core navigation features.
                </p>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-blue-500 rounded-md flex items-center justify-center">
                                <x-heroicon-o-user class="w-5 h-5 text-white" />
                            </div>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Total Users</dt>
                                <dd class="text-lg font-medium text-gray-900">1,234</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-green-500 rounded-md flex items-center justify-center">
                                <x-heroicon-o-document class="w-5 h-5 text-white" />
                            </div>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Documents</dt>
                                <dd class="text-lg font-medium text-gray-900">89</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-yellow-500 rounded-md flex items-center justify-center">
                                <x-heroicon-o-bell class="w-5 h-5 text-white" />
                            </div>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Notifications</dt>
                                <dd class="text-lg font-medium text-gray-900">8</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-purple-500 rounded-md flex items-center justify-center">
                                <x-heroicon-o-calendar class="w-5 h-5 text-white" />
                            </div>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">Events</dt>
                                <dd class="text-lg font-medium text-gray-900">24</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Recent Activity</h3>
                    <div class="flow-root">
                        <ul class="-mb-8">
                            <li>
                                <div class="relative pb-8">
                                    <div class="relative flex space-x-3">
                                        <div>
                                            <span class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-white">
                                                <x-heroicon-o-user class="h-4 w-4 text-white" />
                                            </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">User <span class="font-medium text-gray-900">John Doe</span> logged in</p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                2h ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="relative pb-8">
                                    <div class="relative flex space-x-3">
                                        <div>
                                            <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                                <x-heroicon-o-document class="h-4 w-4 text-white" />
                                            </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Document <span class="font-medium text-gray-900">Report.pdf</span> uploaded</p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                4h ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="relative">
                                    <div class="relative flex space-x-3">
                                        <div>
                                            <span class="h-8 w-8 rounded-full bg-purple-500 flex items-center justify-center ring-8 ring-white">
                                                <x-heroicon-o-calendar class="h-4 w-4 text-white" />
                                            </span>
                                        </div>
                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                            <div>
                                                <p class="text-sm text-gray-500">Event <span class="font-medium text-gray-900">Team Meeting</span> scheduled</p>
                                            </div>
                                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                6h ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Quick Actions</h3>
                    <div class="space-y-3">
                        <button class="w-full text-left px-4 py-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors border border-blue-200">
                            <div class="flex items-center">
                                <x-heroicon-o-plus class="h-5 w-5 text-blue-600 mr-3" />
                                <div>
                                    <div class="font-medium text-blue-900">Create New Document</div>
                                    <div class="text-sm text-blue-600">Start a new document or file</div>
                                </div>
                            </div>
                        </button>
                        <button class="w-full text-left px-4 py-3 bg-green-50 hover:bg-green-100 rounded-lg transition-colors border border-green-200">
                            <div class="flex items-center">
                                <x-heroicon-o-user class="h-5 w-5 text-green-600 mr-3" />
                                <div>
                                    <div class="font-medium text-green-900">Invite User</div>
                                    <div class="text-sm text-green-600">Add someone to your workspace</div>
                                </div>
                            </div>
                        </button>
                        <button class="w-full text-left px-4 py-3 bg-purple-50 hover:bg-purple-100 rounded-lg transition-colors border border-purple-200">
                            <div class="flex items-center">
                                <x-heroicon-o-calendar class="h-5 w-5 text-purple-600 mr-3" />
                                <div>
                                    <div class="font-medium text-purple-900">Schedule Event</div>
                                    <div class="text-sm text-purple-600">Create a new calendar event</div>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>