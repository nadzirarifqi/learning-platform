<x-layout>
    <x-slot:title>{{ $course['title'] }}</x-slot:title>
    
    <div class="space-y-6">
        <!-- Course Header -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="relative">
                <!-- Course Banner -->
                <div class="h-64 bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center">
                    <div class="text-center">
                        <button onclick="window.open('{{ $course['videoUrl'] }}', '_blank')"
                                class="bg-white bg-opacity-20 hover:bg-opacity-30 rounded-full p-6 transition-colors mb-4">
                            <x-heroicon-s-play class="h-16 w-16 text-white" />
                        </button>
                        <p class="text-white text-lg font-medium">Watch Course Preview</p>
                    </div>
                </div>
                
                <!-- Course Info -->
                <div class="px-6 py-8">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $course['level'] === 'Advanced' ? 'bg-red-100 text-red-800' : ($course['level'] === 'Intermediate' ? 'bg-orange-100 text-orange-800' : 'bg-green-100 text-green-800') }}">
                            {{ $course['level'] }}
                        </span>
                        <div class="flex items-center">
                            <x-heroicon-s-star class="h-5 w-5 text-yellow-400" />
                            <span class="text-sm font-medium ml-1">{{ $course['rating'] }}</span>
                            <span class="text-sm text-gray-500 ml-2">({{ number_format($course['students']) }} students)</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <x-heroicon-o-clock class="h-4 w-4 mr-1" />
                            {{ $course['duration'] }}
                        </div>
                    </div>
                    
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $course['title'] }}</h1>
                    <p class="text-lg text-gray-600 mb-6">{{ $course['description'] }}</p>
                    
                    <!-- Instructor Info -->
                    <div class="flex items-center mb-6">
                        <img class="h-12 w-12 rounded-full" 
                             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
                             alt="Instructor">
                        <div class="ml-4">
                            <p class="text-lg font-medium text-gray-900">{{ $course['instructor'] }}</p>
                            <p class="text-sm text-gray-500">Expert Instructor</p>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex gap-4">
                        <button class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                            Enroll Now - $99
                        </button>
                        <a href="{{ $course['videoUrl'] }}" 
                           target="_blank"
                           class="border border-gray-300 text-gray-700 px-8 py-3 rounded-lg font-semibold hover:bg-gray-50 transition-colors flex items-center">
                            <x-heroicon-o-play class="h-5 w-5 mr-2" />
                            Preview Course
                    </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Course Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">
                <!-- What You'll Learn -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-6 py-5">
                        <h2 class="text-xl font-semibold text-gray-900 mb-4">What you'll learn</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            @foreach($course['topics'] as $topic)
                                <div class="flex items-center">
                                    <x-heroicon-o-check-circle class="h-5 w-5 text-green-500 mr-3" />
                                    <span class="text-gray-700">{{ $topic }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <!-- Course Lessons -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-6 py-5">
                        <h2 class="text-xl font-semibold text-gray-900 mb-4">Course Content</h2>
                        <div class="space-y-3">
                            @foreach($course['lessons'] as $index => $lesson)
                                <div class="border border-gray-200 rounded-lg p-4 hover:bg-gray-50 transition-colors">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                                    <x-heroicon-o-play class="h-5 w-5 text-blue-600" />
                                                </div>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-base font-medium text-gray-900">
                                                    {{ $index + 1 }}. {{ $lesson['title'] }}
                                                </p>
                                                <p class="text-sm text-gray-500 mt-1">{{ $lesson['duration'] }}</p>
                                            </div>
                                        </div>
                                        <x-heroicon-o-lock-closed class="h-5 w-5 text-gray-400" />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <!-- Course Description -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-6 py-5">
                        <h2 class="text-xl font-semibold text-gray-900 mb-4">Course Description</h2>
                        <div class="prose max-w-none text-gray-700">
                            <p>{{ $course['description'] }}</p>
                            <p class="mt-4">This comprehensive course is designed to take you from beginner to advanced level. You'll work on real-world projects and gain hands-on experience with industry-standard tools and practices.</p>
                            <p class="mt-4">By the end of this course, you'll have the skills and confidence to tackle complex projects and advance your career in this field.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-white overflow-hidden shadow rounded-lg sticky top-6">
                    <div class="px-6 py-5">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Course Details</h3>
                        
                        <div class="space-y-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Duration:</span>
                                <span class="font-medium">{{ $course['duration'] }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Level:</span>
                                <span class="font-medium">{{ $course['level'] }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Students:</span>
                                <span class="font-medium">{{ number_format($course['students']) }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Rating:</span>
                                <div class="flex items-center">
                                    <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                                    <span class="font-medium ml-1">{{ $course['rating'] }}</span>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Lessons:</span>
                                <span class="font-medium">{{ count($course['lessons']) }}</span>
                            </div>
                        </div>
                        
                        <hr class="my-6">
                        
                        <div class="space-y-3">
                            <button class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                                Enroll Now
                            </button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Back Button -->
        <div class="flex justify-start">
            <a href="{{ route('search') }}" 
               class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                <x-heroicon-o-arrow-left class="h-4 w-4 mr-2" />
                Back to Courses
            </a>
        </div>
    </div>
</x-layout>
