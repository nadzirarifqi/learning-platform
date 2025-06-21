<x-layout>
    <x-slot:title>Courses</x-slot:title>
  
    <div class="space-y-6" x-data="{
        showModal: false,
        selectedCourse: null,
        courses: @js($courses),
        openModal(courseId) {
            console.log('Opening modal for course ID:', courseId);
            console.log('Available courses:', this.courses);
            console.log('Course keys:', Object.keys(this.courses));
            this.selectedCourse = this.courses[courseId];
            if (this.selectedCourse) {
                console.log('Selected course:', this.selectedCourse);
                this.showModal = true;
                document.body.style.overflow = 'hidden';
            } else {
                console.error('Course not found for ID:', courseId);
                console.error('Available course IDs:', Object.keys(this.courses));
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
                <div class="flex flex-wrap gap-2 mb-6">
                    <a href="{{ route('search') }}" 
                       class="px-4 py-2 {{ !request('q') ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }} rounded-lg text-sm font-medium transition-colors">
                        All Courses
                    </a>
                    <a href="{{ route('search', ['q' => 'React']) }}" 
                       class="px-4 py-2 {{ request('q') === 'React' ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }} rounded-lg text-sm font-medium transition-colors">
                        Technology
                    </a>
                    <a href="{{ route('search', ['q' => 'Data Science']) }}" 
                       class="px-4 py-2 {{ request('q') === 'Data Science' ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }} rounded-lg text-sm font-medium transition-colors">
                        Data Science
                    </a>
                    <a href="{{ route('search', ['q' => 'Marketing']) }}" 
                       class="px-4 py-2 {{ request('q') === 'Marketing' ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }} rounded-lg text-sm font-medium transition-colors">
                        Marketing
                    </a>
                    <a href="{{ route('search', ['q' => 'Design']) }}" 
                       class="px-4 py-2 {{ request('q') === 'Design' ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }} rounded-lg text-sm font-medium transition-colors">
                        Design
                    </a>
                </div>
                
                <!-- Results count -->
                @if(request('q'))
                    <div class="mb-4">
                        <p class="text-sm text-gray-600">
                            Found {{ count($courses) }} course(s) for "{{ request('q') }}"
                        </p>
                    </div>
                @else
                    <div class="mb-4">
                        <p class="text-sm text-gray-600">
                            Showing all {{ count($courses) }} available courses
                        </p>
                    </div>
                @endif
                
                <!-- Course cards -->
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
                            :gradient="$gradients[($loop->index) % count($gradients)]" />
                    @empty
                        <div class="col-span-full text-center py-12">
                            <x-heroicon-o-magnifying-glass class="mx-auto h-12 w-12 text-gray-400" />
                            <h3 class="mt-2 text-sm font-medium text-gray-900">No courses found</h3>
                            <p class="mt-1 text-sm text-gray-500">
                                @if(request('q'))
                                    Try adjusting your search terms or <a href="{{ route('search') }}" class="text-blue-600 hover:text-blue-500">browse all courses</a>.
                                @else
                                    No courses are currently available. Make sure you've run the database seeder.
                                @endif
                            </p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Modal -->
        <x-course-modal />
    </div>
</x-layout>
