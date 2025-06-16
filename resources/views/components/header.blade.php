
<div
  class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 transition-all duration-300 lg:pl-28"
>
  
  <!-- Mobile menu button -->
  <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden">
    <span class="sr-only">Open sidebar</span>
    <x-heroicon-o-bars-3 class="h-6 w-6" />
  </button>

  <!-- Separator -->
  <div class="h-6 w-px bg-gray-200 lg:hidden" aria-hidden="true"></div>

  <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
    <div class="relative flex flex-1 items-center">
      <h1 class="text-xl font-bold leading-6 text-primary">{{ $slot }}</h1>
    </div>
    <div class="flex items-center gap-x-4 lg:gap-x-6">
      <!-- Notifications button -->
      <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-500">
        <span class="sr-only">View notifications</span>
        <x-heroicon-o-bell class="h-6 w-6" />
      </button>

      <!-- Separator -->
      <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-200" aria-hidden="true"></div>

      <!-- Profile dropdown -->
      <div class="relative" x-data="{ open: false }">
        <button type="button" 
                class="-m-1.5 flex items-center p-1.5" 
                @click="open = !open"
                @click.away="open = false">
          <span class="sr-only">Open user menu</span>
          <img class="h-8 w-8 rounded-full bg-gray-50" 
               src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
               alt="">
          <span class="hidden lg:flex lg:items-center">
            <span class="ml-4 text-sm font-semibold leading-6 text-gray-900">John Doe</span>
            <x-heroicon-o-chevron-down class="ml-2 h-5 w-5 text-gray-400" />
          </span>
        </button>

        <!-- Dropdown menu -->
        <div x-show="open"
             x-transition:enter="transition ease-out duration-100"
             x-transition:enter-start="transform opacity-0 scale-95"
             x-transition:enter-end="transform opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-75"
             x-transition:leave-start="transform opacity-100 scale-100"
             x-transition:leave-end="transform opacity-0 scale-95"
             class="absolute right-0 z-10 mt-2.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5">
          <a href="{{ route('profile') }}" class="block px-3 py-1 text-sm leading-6 text-gray-900 hover:bg-gray-50">Your profile</a>
          <a href="{{ route('settings') }}" class="block px-3 py-1 text-sm leading-6 text-gray-900 hover:bg-gray-50">Settings</a>
          <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900 hover:bg-gray-50">Sign out</a>
        </div>
      </div>
    </div>
  </div>
</div>