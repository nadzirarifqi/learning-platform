<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="space-y-6">
        <!-- Current Plan -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center mb-4">
                    <x-heroicon-o-credit-card class="h-6 w-6 text-gray-400 mr-3" />
                    <h2 class="text-lg font-medium text-gray-900">Current Plan</h2>
                </div>
                <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg">
                    <div>
                        <h3 class="text-lg font-semibold text-blue-900">Pro Plan</h3>
                        <p class="text-blue-600">$29/month • Billed monthly</p>
                        <p class="text-sm text-blue-500 mt-1">Next billing date: January 15, 2024</p>
                    </div>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 flex items-center">
                        <x-heroicon-o-arrow-up class="h-4 w-4 mr-2" />
                        Upgrade Plan
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Payment Method -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <x-heroicon-o-credit-card class="h-6 w-6 text-gray-400 mr-3" />
                        <h2 class="text-lg font-medium text-gray-900">Payment Method</h2>
                    </div>
                    <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                        Update
                    </button>
                </div>
                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                    <x-heroicon-o-credit-card class="h-8 w-8 text-gray-400" />
                    <div>
                        <p class="font-medium text-gray-900">•••• •••• •••• 4242</p>
                        <p class="text-sm text-gray-500">Expires 12/2025</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Billing History -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center mb-4">
                    <x-heroicon-o-document-text class="h-6 w-6 text-gray-400 mr-3" />
                    <h2 class="text-lg font-medium text-gray-900">Billing History</h2>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Invoice</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Dec 1, 2023</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Pro Plan - Monthly</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$29.00</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <x-heroicon-o-check-circle class="h-3 w-3 mr-1" />
                                        Paid
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <button class="text-blue-600 hover:text-blue-800 flex items-center">
                                        <x-heroicon-o-arrow-down-tray class="h-4 w-4 mr-1" />
                                        Download
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Nov 1, 2023</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Pro Plan - Monthly</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">$29.00</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <x-heroicon-o-check-circle class="h-3 w-3 mr-1" />
                                        Paid
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <button class="text-blue-600 hover:text-blue-800 flex items-center">
                                        <x-heroicon-o-arrow-down-tray class="h-4 w-4 mr-1" />
                                        Download
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>