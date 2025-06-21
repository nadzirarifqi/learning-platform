<x-layout>
    <x-slot:title>Courses</x-slot:title>
    <div class="space-y-6" x-data="{
        showModal: false,
        selectedCourse: null,
        courses: @js($courses),
        openModal(courseId) {
            console.log('Opening modal for course ID:', courseId);
            console.log('Available courses:', this.courses);
            this.selectedCourse = this.courses[courseId];
            if (this.selectedCourse) {
                this.showModal = true;
                document.body.style.overflow = 'hidden';
            } else {
                console.error('Course not found for ID:', courseId);
            }
        },  
        closeModal() {
            this.showModal = false;
            this.selectedCourse = null;
            document.body.style.overflow = 'auto';
        }
    }">
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h2 class="text-lg font-medium text-gray-900 mb-4">Search Courses</h2>
                
                <!-- Search form -->
                <form method="GET" action="{{ route('search') }}" class="mb-6">
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <x-heroicon-o-magnifying-glass class="h-5 w-5 text-gray-400" />
                        </div>
                        <input type="text" 
                               name="q"
                               value="{{ request('q') }}"
                               placeholder="Search courses, topics, instructors..." 
                               class="block w-full rounded-md border-0 py-3 pl-10 pr-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                    </div>
                </form>
                
                <!-- Search filters -->
                <div class="flex space-x-4 mb-6">
                    <button class="px-4 py-2 bg-blue-100 text-blue-800 rounded-lg text-sm font-medium">All</button>
                    <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-200">Technology</button>
                    <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-200">Science</button>
                    <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-200">Business</button>
                </div>
                
                <!-- Results count -->
                @if(request('q'))
                    <div class="mb-4">
                        <p class="text-sm text-gray-600">
                            Found {{ count($courses) }} course(s) for "{{ request('q') }}"
                        </p>
                    </div>
                @endif
                
                <!-- Course cards - UPDATED TO USE camelCase -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($courses as $id => $course)
                        <x-course-card 
                            :courseId="$id"
                            :title="$course['title']"
                            :description="$course['description']"
                            :instructor="$course['instructor']"
                            :level="$course['level']"
                            :rating="$course['rating']"
                            :students="$course['students']"
                            :gradient="$gradients[($id - 1) % count($gradients)]" />
                    @empty
                        <div class="col-span-full text-center py-12">
                            <x-heroicon-o-magnifying-glass class="mx-auto h-12 w-12 text-gray-400" />
                            <h3 class="mt-2 text-sm font-medium text-gray-900">No courses found</h3>
                            <p class="mt-1 text-sm text-gray-500">Try adjusting your search terms.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Modal -->
        <x-course-modal />
    </div>
</x-layout>