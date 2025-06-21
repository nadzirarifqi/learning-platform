<div x-show="showModal" 
     x-transition:enter="ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     class="fixed inset-0 z-50 overflow-y-auto"
     @keydown.escape.window="closeModal()">
    
    <!-- Background overlay -->
    <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity"
         @click="closeModal()"></div>
    
    <!-- Modal content -->
    <div class="flex min-h-full items-center justify-center p-4">
        <div x-show="showModal"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             class="relative bg-white rounded-lg shadow-xl max-w-6xl w-full max-h-[90vh] overflow-hidden"
             @click.stop>
            
            <!-- Close button -->
            <button @click="closeModal()" 
                    class="absolute top-4 right-4 z-10 p-2 rounded-full bg-black bg-opacity-20 text-white hover:bg-opacity-30 transition-colors">
                <x-heroicon-o-x-mark class="h-6 w-6" />
            </button>
            
            <div class="flex flex-col lg:flex-row h-full max-h-[90vh]">
                <!-- Left side - Course details -->
                <div class="flex-1 p-6 overflow-y-auto">
                    <template x-if="selectedCourse">
                        <div>
                            <!-- Course header -->
                            <div class="mb-6">
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium"
                                          :class="{
                                              'bg-red-100 text-red-800': selectedCourse.level === 'Advanced',
                                              'bg-green-100 text-green-800': selectedCourse.level === 'Beginner',
                                              'bg-orange-100 text-orange-800': selectedCourse.level === 'Intermediate'
                                          }"
                                          x-text="selectedCourse.level"></span>
                                    <div class="flex items-center">
                                        <x-heroicon-s-star class="h-5 w-5 text-yellow-400" />
                                        <span class="text-sm text-gray-600 ml-1" x-text="selectedCourse.rating"></span>
                                        <span class="text-sm text-gray-400 ml-2">(<span x-text="selectedCourse.students.toLocaleString()"></span> students)</span>
                                    </div>
                                </div>
                                <h2 class="text-2xl font-bold text-gray-900 mb-2" x-text="selectedCourse.title"></h2>
                                <p class="text-gray-600 mb-4" x-text="selectedCourse.description"></p>
                            </div>

                            <!-- Course info -->
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <div class="flex items-center mb-2">
                                        <x-heroicon-o-user class="h-5 w-5 text-gray-400 mr-2" />
                                        <span class="text-sm font-medium text-gray-900">Instructor</span>
                                    </div>
                                    <p class="text-gray-600" x-text="selectedCourse.instructor"></p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <div class="flex items-center mb-2">
                                        <x-heroicon-o-clock class="h-5 w-5 text-gray-400 mr-2" />
                                        <span class="text-sm font-medium text-gray-900">Duration</span>
                                    </div>
                                    <p class="text-gray-600" x-text="selectedCourse.duration"></p>
                                </div>
                            </div>

                            <!-- Topics covered -->
                            <div class="mb-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">What you'll learn</h3>
                                <div class="flex flex-wrap gap-2">
                                    <template x-for="topic in selectedCourse.topics" :key="topic">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-blue-50 text-blue-700 border border-blue-200"
                                              x-text="topic"></span>
                                    </template>
                                </div>
                            </div>

                            <!-- Action buttons -->
                            <div class="flex gap-3 mb-6">
                                <a :href="selectedCourse.videoUrl" 
                                   target="_blank"
                                   class="flex-1 bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition-colors flex items-center justify-center h-12">
                                    <x-heroicon-o-play class="h-5 w-5 mr-2" />
                                    Watch Preview
                                </a>
                            
                            </div>

                            <!-- View Full Course Button (Mobile) -->
                            <div class="lg:hidden mb-6">
                                <a :href="`/courses/${Object.keys(courses).find(key => courses[key] === selectedCourse) || 1}`"
                                   class="w-full bg-gray-900 text-white px-6 py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors flex items-center justify-center h-12">
                                    <x-heroicon-o-academic-cap class="h-5 w-5 mr-2" />
                                    View Full Course
                                </a>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Right side - Course Content & Video preview -->
                <div class="lg:w-96 bg-gray-50 border-l border-gray-200 flex flex-col">
                    <template x-if="selectedCourse">
                        <div class="h-full flex flex-col">
                            <!-- Video Preview Section -->
                            <div class="bg-gray-900 p-6 flex-shrink-0">
                                <div class="aspect-video bg-gray-800 rounded-lg mb-4 flex items-center justify-center">
                                    <button @click="window.open(selectedCourse.videoUrl, '_blank')"
                                            class="bg-white bg-opacity-20 hover:bg-opacity-30 rounded-full p-4 transition-colors">
                                        <x-heroicon-s-play class="h-12 w-12 text-white" />
                                    </button>
                                </div>
                                <p class="text-white text-sm opacity-80 text-center">Click to watch course preview</p>
                            </div>

                            <!-- Course Content Section - Scrollable -->
                            <div class="flex-1 flex flex-col min-h-0">
                                <div class="p-6 pb-4 flex-shrink-0">
                                    <div class="flex items-center justify-between mb-4">
                                        <h3 class="text-lg font-semibold text-gray-900">Course Content</h3>
                                        <span class="text-sm text-gray-500" x-text="selectedCourse.lessons ? selectedCourse.lessons.length + ' lessons' : '0 lessons'"></span>
                                    </div>
                                </div>

                                <!-- Scrollable Lessons List -->
                                <div class="flex-1 px-6 pb-6 overflow-y-auto">
                                    <div class="space-y-2">
                                        <template x-for="(lesson, index) in (selectedCourse.lessons || [])" :key="lesson.id">
                                            <div class="group border border-gray-200 rounded-lg p-3 hover:bg-blue-50 hover:border-blue-200 transition-colors cursor-pointer"
                                                 @click.stop="window.location.href = `/courses/${Object.keys(courses).find(key => courses[key] === selectedCourse) || 1}/lessons/${lesson.id}`">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center space-x-3">
                                                        <div class="flex-shrink-0">
                                                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center group-hover:bg-blue-200 transition-colors">
                                                                <x-heroicon-o-play class="h-4 w-4 text-blue-600" />
                                                            </div>
                                                        </div>
                                                        <div class="flex-1 min-w-0">
                                                            <p class="text-sm font-medium text-gray-900 group-hover:text-blue-700 transition-colors" 
                                                               x-text="`${index + 1}. ${lesson.title}`"></p>
                                                            <p class="text-xs text-gray-500" x-text="lesson.duration"></p>
                                                        </div>
                                                    </div>
                                                    <x-heroicon-o-chevron-right class="h-4 w-4 text-gray-400 group-hover:text-blue-600 transition-colors" />
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </div>

                                <!-- View Full Course Button (Desktop) - Fixed at bottom -->
                                <div class="p-6 pt-4 border-t border-gray-200 flex-shrink-0">
                                    <a :href="`/courses/${Object.keys(courses).find(key => courses[key] === selectedCourse) || 1}`"
                                       class="w-full bg-gray-900 text-white px-4 py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors flex items-center justify-center h-12">
                                        <x-heroicon-o-academic-cap class="h-5 w-5 mr-2" />
                                        View Full Course
                                    </a>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</div>
