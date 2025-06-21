<x-layout>
    <x-slot:title>{{ $lesson->title }} - {{ $course->title }}</x-slot:title>
    
    <div class="min-h-screen bg-gray-50">
        <!-- Header -->
        <div class="bg-white border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('courses.show', $course->id) }}" 
                           class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-700">
                            <x-heroicon-o-arrow-left class="h-4 w-4 mr-2" />
                            Back to Course
                        </a>
                        <div class="h-6 border-l border-gray-300"></div>
                        <h1 class="text-lg font-semibold text-gray-900 truncate">{{ $lesson->title }}</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-sm text-gray-500">
                            Lesson {{ $lesson->order }} of {{ $course->lessons->count() }}
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto flex">
            <!-- Main Content - Video Player -->
            <div class="flex-1 bg-black">
                <div class="aspect-video bg-gray-900 flex items-center justify-center">
                    @if($lesson->video_url)
                        <!-- Video Player -->
                        <div class="w-full h-full relative">
                            <iframe 
                                src="{{ $lesson->video_url }}" 
                                class="w-full h-full"
                                frameborder="0" 
                                allowfullscreen>
                            </iframe>
                        </div>
                    @else
                        <!-- Placeholder when no video -->
                        <div class="text-center">
                            <x-heroicon-o-play-circle class="h-24 w-24 text-gray-400 mx-auto mb-4" />
                            <p class="text-gray-400 text-lg">Video coming soon</p>
                        </div>
                    @endif
                </div>

                <!-- Video Controls/Info -->
                <div class="bg-white p-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <h2 class="text-2xl font-bold text-gray-900 mb-2">{{ $lesson->title }}</h2>
                            @if($lesson->description)
                                <p class="text-gray-600 mb-4">{{ $lesson->description }}</p>
                            @endif
                            <div class="flex items-center space-x-6 text-sm text-gray-500">
                                <div class="flex items-center">
                                    <x-heroicon-o-clock class="h-4 w-4 mr-1" />
                                    {{ $lesson->duration }}
                                </div>
                                <div class="flex items-center">
                                    <x-heroicon-o-user class="h-4 w-4 mr-1" />
                                    {{ $course->instructor }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="flex items-center justify-between mt-6 pt-6 border-t border-gray-200">
                        @if($previousLesson)
                            <a href="{{ route('courses.lessons.show', [$course->id, $previousLesson->id]) }}" 
                               class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                <x-heroicon-o-chevron-left class="h-4 w-4 mr-2" />
                                Previous Lesson
                            </a>
                        @else
                            <div></div>
                        @endif

                        @if($nextLesson)
                            <a href="{{ route('courses.lessons.show', [$course->id, $nextLesson->id]) }}" 
                               class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-blue-700">
                                Next Lesson
                                <x-heroicon-o-chevron-right class="h-4 w-4 ml-2" />
                            </a>
                        @else
                            <a href="{{ route('courses.show', $course->id) }}" 
                               class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-green-700">
                                Course Complete!
                                <x-heroicon-o-check-circle class="h-4 w-4 ml-2" />
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Sidebar - Course Materials -->
            <div class="w-80 bg-white border-l border-gray-200 flex flex-col max-h-screen">
                <!-- Course Info Header -->
                <div class="p-6 border-b border-gray-200 flex-shrink-0">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $course->title }}</h3>
                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <span>{{ $course->lessons->count() }} lessons</span>
                        <span>{{ $course->duration }}</span>
                    </div>
                    <div class="mt-3 bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-600 h-2 rounded-full" style="width: {{ ($lesson->order / $course->lessons->count()) * 100 }}%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">
                        {{ round(($lesson->order / $course->lessons->count()) * 100) }}% Complete
                    </p>
                </div>

                <!-- Lessons List -->
                <div class="flex-1 overflow-y-auto">
                    <div class="p-4">
                        <h4 class="text-sm font-semibold text-gray-900 mb-3">Course Content</h4>
                        <div class="space-y-2">
                            @foreach($course->lessons as $courseLesson)
                                <div class="group">
                                    <a href="{{ route('courses.lessons.show', [$course->id, $courseLesson->id]) }}" 
                                       class="block p-3 rounded-lg transition-colors {{ $courseLesson->id === $lesson->id ? 'bg-blue-50 border border-blue-200' : 'hover:bg-gray-50 border border-transparent' }}">
                                        <div class="flex items-center space-x-3">
                                            <div class="flex-shrink-0">
                                                @if($courseLesson->id === $lesson->id)
                                                    <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                                                        <x-heroicon-s-play class="h-4 w-4 text-white" />
                                                    </div>
                                                @elseif($courseLesson->order < $lesson->order)
                                                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                                        <x-heroicon-s-check class="h-4 w-4 text-green-600" />
                                                    </div>
                                                @else
                                                    <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center group-hover:bg-gray-200">
                                                        @if($courseLesson->is_free)
                                                            <x-heroicon-o-play class="h-4 w-4 text-gray-600" />
                                                        @else
                                                            <x-heroicon-o-lock-closed class="h-4 w-4 text-gray-400" />
                                                        @endif
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm font-medium text-gray-900 {{ $courseLesson->id === $lesson->id ? 'text-blue-700' : '' }}">
                                                    {{ $courseLesson->order }}. {{ $courseLesson->title }}
                                                </p>
                                                <p class="text-xs text-gray-500 mt-1">{{ $courseLesson->duration }}</p>
                                            </div>
                                            @if($courseLesson->is_free)
                                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                    Free
                                                </span>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Course Actions -->
                <div class="p-4 border-t border-gray-200 flex-shrink-0">
                    <div class="space-y-3">
                        <a href="{{ route('courses.show', $course->id) }}" 
                           class="w-full bg-gray-900 text-white px-4 py-2 rounded-lg font-medium hover:bg-gray-800 transition-colors flex items-center justify-center">
                            <x-heroicon-o-academic-cap class="h-4 w-4 mr-2" />
                            Course Overview
                        </a>
                        <button class="w-full border border-gray-300 text-gray-700 px-4 py-2 rounded-lg font-medium hover:bg-gray-50 transition-colors">
                            Download Materials
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
