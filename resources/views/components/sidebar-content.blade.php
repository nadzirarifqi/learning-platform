@props(['collapsed' => false, 'mobile' => false])

<nav class="flex flex-1 flex-col">
  <ul role="list" class="flex flex-1 flex-col gap-y-7">
    <li>
      <ul role="list" class="-mx-2 space-y-1">
        <li>
          <a href="{{ route('dashboard') }}" 
             class="group flex items-center gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('dashboard') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}"
             :class="{'justify-center': {{ $collapsed ? 'true' : 'collapsed' }}}">
            <x-heroicon-o-home class="h-6 w-6 shrink-0" />
            <span :class="{'opacity-0 hidden': {{ $collapsed ? 'true' : 'collapsed' }}, 'opacity-100': !{{ $collapsed ? 'true' : 'collapsed' }}}" class="transition-opacity duration-300">Dashboard</span>
          </a>
        </li> 
        <li>
          <a href="{{ route('course') }}" 
             class="group flex items-center gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('course') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}"
             :class="{'justify-center': {{ $collapsed ? 'true' : 'collapsed' }}}">
            <x-heroicon-o-academic-cap class="h-6 w-6 shrink-0" />
            <span :class="{'opacity-0 hidden': {{ $collapsed ? 'true' : 'collapsed' }}, 'opacity-100': !{{ $collapsed ? 'true' : 'collapsed' }}}" class="transition-opacity duration-300">Course</span>
          </a>
        </li>
        <li>
          <a href="{{ route('schedule') }}" 
             class="group flex items-center gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('schedule') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}"
             :class="{'justify-center': {{ $collapsed ? 'true' : 'collapsed' }}}">
            <x-heroicon-o-calendar class="h-6 w-6 shrink-0" />
            <span :class="{'opacity-0 hidden': {{ $collapsed ? 'true' : 'collapsed' }}, 'opacity-100': !{{ $collapsed ? 'true' : 'collapsed' }}}" class="transition-opacity duration-300">Schedule</span>
          </a>
        </li>
        <li>
          <a href="{{ route('learnmap') }}" 
             class="group flex items-center gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('learnmap') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}"
             :class="{'justify-center': {{ $collapsed ? 'true' : 'collapsed' }}}">
            <x-heroicon-o-map class="h-6 w-6 shrink-0" />
            <span :class="{'opacity-0 hidden': {{ $collapsed ? 'true' : 'collapsed' }}, 'opacity-100': !{{ $collapsed ? 'true' : 'collapsed' }}}" class="transition-opacity duration-300">LearnMap</span>
          </a>
        </li>
        
        <li>
          <a href="{{ route('inbox') }}" 
             class="group flex items-center gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('inbox') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}"
             :class="{'justify-center': {{ $collapsed ? 'true' : 'collapsed' }}}">
            <x-heroicon-o-inbox class="h-6 w-6 shrink-0" />
            <span :class="{'opacity-0 hidden': {{ $collapsed ? 'true' : 'collapsed' }}, 'opacity-100': !{{ $collapsed ? 'true' : 'collapsed' }}}" class="transition-opacity duration-300">Inbox</span>
          </a>
        </li>
      </ul>
    </li>
    
    <!-- Account section - shown differently based on collapsed state -->
    @if($collapsed && !$mobile)
      <li>
        <ul role="list" class="-mx-2 space-y-1">
          <li>
            <a href="{{ route('settings') }}" 
               class="group flex items-center justify-center gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('settings') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
              <x-heroicon-o-cog-6-tooth class="h-6 w-6 shrink-0" />
            </a>
          </li>
          <li>
            <a href="{{ route('profile') }}" 
               class="group flex items-center justify-center gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('profile') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
              <x-heroicon-o-user class="h-6 w-6 shrink-0" />
            </a>
          </li>
          <li>
            <a href="{{ route('subscription') }}" 
               class="group flex items-center justify-center gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('subscription') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
              <x-heroicon-o-credit-card class="h-6 w-6 shrink-0" />
            </a>
          </li>
        </ul>
      </li>
    @else
      <li>
        <ul role="list" class="-mx-2 mt-2 space-y-1">
          <li>
            <a href="{{ route('settings') }}" 
               class="group flex items-center gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('settings') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}"
               :class="{'justify-center': {{ $collapsed ? 'true' : 'collapsed' }}}">
              <x-heroicon-o-cog-6-tooth class="h-6 w-6 shrink-0" />
              <span :class="{'opacity-0 hidden': {{ $collapsed ? 'true' : 'collapsed' }}, 'opacity-100': !{{ $collapsed ? 'true' : 'collapsed' }}}" class="transition-opacity duration-300">Settings</span>
            </a>
          </li>
          <li>
            <a href="{{ route('profile') }}" 
               class="group flex items-center gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('profile') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}"
               :class="{'justify-center': {{ $collapsed ? 'true' : 'collapsed' }}}">
              <x-heroicon-o-user class="h-6 w-6 shrink-0" />
              <span :class="{'opacity-0 hidden': {{ $collapsed ? 'true' : 'collapsed' }}, 'opacity-100': !{{ $collapsed ? 'true' : 'collapsed' }}}" class="transition-opacity duration-300">Profile</span>
            </a>
          </li>
          <li>
            <a href="{{ route('subscription') }}" 
               class="group flex items-center gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold {{ request()->routeIs('subscription') ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}"
               :class="{'justify-center': {{ $collapsed ? 'true' : 'collapsed' }}}">
              <x-heroicon-o-credit-card class="h-6 w-6 shrink-0" />
              <span :class="{'opacity-0 hidden': {{ $collapsed ? 'true' : 'collapsed' }}, 'opacity-100': !{{ $collapsed ? 'true' : 'collapsed' }}}" class="transition-opacity duration-300">Subscription</span>
            </a>
          </li>
        </ul>
      </li>
    @endif
    
    <li class="mt-auto">
      <a href="#" 
         class="group -mx-2 flex items-center gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-400 hover:bg-gray-800 hover:text-white"
         :class="{'justify-center mx-0': {{ $collapsed ? 'true' : 'collapsed' }}}">
        <x-heroicon-o-arrow-right-on-rectangle class="h-6 w-6 shrink-0" />
        <span :class="{'opacity-0 hidden': {{ $collapsed ? 'true' : 'collapsed' }}, 'opacity-100': !{{ $collapsed ? 'true' : 'collapsed' }}}" class="transition-opacity duration-300">Logout</span>
      </a>
    </li>
  </ul>
</nav>