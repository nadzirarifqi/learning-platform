<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="space-y-6">
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center space-x-6 mb-6">
                    <img class="h-24 w-24 rounded-full" 
                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
                         alt="Profile">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900">{{ auth()->user()->name ?? 'John Doe' }}</h2>
                        <p class="text-gray-600">{{ auth()->user()->email ?? 'john@example.com' }}</p>
                        <p class="text-sm text-gray-500">Senior Developer</p>
                        <button class="mt-2 inline-flex items-center px-3 py-1 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            <x-heroicon-o-pencil class="h-4 w-4 mr-1" />
                            Edit Profile
                        </button>
                    </div>
                </div>
                
                <!-- Profile details -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-4 flex items-center">
                            <x-heroicon-o-user class="h-5 w-5 mr-2" />
                            Personal Information
                        </h3>
                        <dl class="space-y-3">
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Phone</dt>
                                <dd class="text-sm text-gray-900">+1 (555) 123-4567</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Location</dt>
                                <dd class="text-sm text-gray-900">San Francisco, CA</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Joined</dt>
                                <dd class="text-sm text-gray-900">January 2023</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Department</dt>
                                <dd class="text-sm text-gray-900">Engineering</dd>
                            </div>
                        </dl>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-4 flex items-center">
                            <x-heroicon-o-chart-bar class="h-5 w-5 mr-2" />
                            Activity
                        </h3>
                        <dl class="space-y-3">
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Documents</dt>
                                <dd class="text-sm text-gray-900">45 documents created</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Last Login</dt>
                                <dd class="text-sm text-gray-900">2 hours ago</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Status</dt>
                                <dd class="text-sm text-gray-900">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <x-heroicon-o-check-circle class="h-3 w-3 mr-1" />
                                        Active
                                    </span>
                                </dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Tasks Completed</dt>
                                <dd class="text-sm text-gray-900">247 this month</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>