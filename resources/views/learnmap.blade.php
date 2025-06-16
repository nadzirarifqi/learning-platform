<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>  
    <div class="space-y-6">
        <!-- Profile Settings -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center mb-4">
                    <x-heroicon-o-user class="h-6 w-6 text-gray-400 mr-3" />
                    <h2 class="text-lg font-medium text-gray-900">Profile Settings</h2>
                </div>
                <form class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                            <input type="text" value="John" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                            <input type="text" value="Doe" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" value="john@example.com" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div class="pt-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                            <x-heroicon-o-check class="h-4 w-4 mr-2" />
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Notification Settings -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center mb-4">
                    <x-heroicon-o-bell class="h-6 w-6 text-gray-400 mr-3" />
                    <h2 class="text-lg font-medium text-gray-900">Notification Settings</h2>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Email Notifications</h3>
                            <p class="text-sm text-gray-500">Receive notifications via email</p>
                        </div>
                        <button type="button" class="bg-blue-600 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2">
                            <span class="translate-x-5 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                        </button>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Push Notifications</h3>
                            <p class="text-sm text-gray-500">Receive push notifications in browser</p>
                        </div>
                        <button type="button" class="bg-gray-200 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2">
                            <span class="translate-x-0 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Security Settings -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center mb-4">
                    <x-heroicon-o-shield-check class="h-6 w-6 text-gray-400 mr-3" />
                    <h2 class="text-lg font-medium text-gray-900">Security Settings</h2>
                </div>
                <div class="space-y-4">
                    <div>
                        <h3 class="text-sm font-medium text-gray-900 mb-2">Change Password</h3>
                        <div class="space-y-3">
                            <input type="password" placeholder="Current password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <input type="password" placeholder="New password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <input type="password" placeholder="Confirm new password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        <button class="mt-3 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                            Update Password
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
