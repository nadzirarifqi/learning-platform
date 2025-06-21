@props([
    'courseId',
    'title',
    'description',
    'instructor',
    'level' => 'Beginner',
    'rating' => '4.5',
    'students' => '0',
    'gradient' => 'from-blue-500 to-purple-600'
])

<div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-200 cursor-pointer"
     @click.stop="openModal({{ $courseId }})">  
    <div class="aspect-video bg-gradient-to-r {{ $gradient }} flex items-center justify-center">
        <x-heroicon-o-play-circle class="h-16 w-16 text-white opacity-80" />
    </div>
    <div class="p-4">
        <div class="flex items-center justify-between mb-2">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $level === 'Advanced' ? 'bg-red-100 text-red-800' : ($level === 'Intermediate' ? 'bg-orange-100 text-orange-800' : 'bg-green-100 text-green-800') }}">
                {{ $level }}
            </span>
            <div class="flex items-center">
                <x-heroicon-s-star class="h-4 w-4 text-yellow-400" />
                <span class="text-sm text-gray-600 ml-1">{{ $rating }}</span>
            </div>
        </div>
        <h3 class="font-semibold text-gray-900 mb-2">{{ $title }}</h3>
        <p class="text-sm text-gray-600 mb-3 line-clamp-2">{{ $description }}</p>
        <div class="flex items-center justify-between text-sm text-gray-500">
            <span>{{ $instructor }}</span>
            <span>{{ number_format($students) }} students</span>
        </div>
    </div>
</div>
