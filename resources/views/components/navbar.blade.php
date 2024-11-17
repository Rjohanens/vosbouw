<header id="navbar" x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 1 })" :class="{ 'bg-white/95 backdrop-blur-md border border-zinc-100': scrolled, 'bg-transparent': !scrolled }" class="fixed top-0 z-50 w-full transition-colors duration-300">
  <nav class="hidden lg:flex justify-between px-8 py-4">
    <div class="flex items-center space-x-4">
      <img class="h-10 w-auto" src="{{ asset('images/logo.png')}}" alt="logo">
      <div class="flex flex-col">
        <h1 class="text-xl text-zinc-900 font-normal">Vos Bouw</h1>
        <p class="text-sm text-zinc-700 font-light">Bouw- en aannemersbedrijf</p>
      </div>
    </div>
    <div class="flex gap-x-8 items-center justify-end">
      <a href="{{route('home')}}" class="text-base hover:text-primary transition-colors duration-300 @if(Str::startswith($activeRouteName, 'home')) font-medium text-primary @else text-zinc-900 @endif">Home</a>
      <a href="{{route('project.index')}}" class="text-base hover:text-primary transition-colors duration-300 @if(Str::startswith($activeRouteName, 'project')) font-medium text-primary @else text-zinc-900 @endif">Projecten</a>
      <a href="{{route('service.index')}}" class="text-base hover:text-primary transition-colors duration-300 @if(Str::startswith($activeRouteName, 'service')) font-medium text-primary @else text-zinc-900 @endif">Diensten</a>      
      <a href="{{ route('contact.index') }}" class="text-base hover:text-primary transition-colors duration-300 @if(Str::startswith($activeRouteName, 'contact')) font-medium text-primary @else text-zinc-900 @endif">Contact</a>
    </div>
    <div class="flex items-center space-x-4">
      <a href="{{ route('contact.index') }}" class="bg-dark text-white text-base px-4 py-3 rounded-full">Offerte aanvragen</a>
  </nav>
  <!-- mobile menu -->
  <nav x-data="{open: false}" class="lg:hidden flex items-center justify-between px-4 py-2">
    <a href="{{route('home')}}">
      <div class="flex items-center space-x-4">
        <img class="h-10 w-auto" src="{{ asset('images/logo.png')}}" alt="logo" />
        <div class="flex flex-col space-y-0 leading-0">
            <h1 class="text-zinc-700 text-sm">Vos Bouw</h1>
            <span class="text-zinc-700 text-xs">Bouw- en aannemersbedrijf</span>
        </div>
      </div>
    </a>
    <button x-on:click="open = true" id="mobile-menu-button" class="focus:outline-none">
      <svg class="w-5 h-5 text-zinc-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M2 5a1 1 0 011-1h14a1 1 0 110 2H3a1 1 0 01-1-1zm0 6a1 1 0 011-1h14a1 1 0 110 2H3a1 1 0 01-1-1zm0 6a1 1 0 011-1h14a1 1 0 110 2H3a1 1 0 01-1-1z" clip-rule="evenodd"/>
      </svg>
    </button>
    <div 
      x-cloak   
      x-show="open"
      x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in duration-300"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      class="absolute inset-0 z-50 w-full h-screen bg-primary p-4"
    >
      <div class="flex flex-row-reverse justify-between">
        <button x-on:click="open = false" id="mobile-menu-button" class="focus:outline-none">
          <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
        </button>
      </div>
      <div class="flex flex-col gap-y-4 mt-8">
        <a href="{{route('home')}}" class="text-white text-lg hover:text-dark transition-colors duration-300">Home</a>
        <a href="{{route('project.index')}}" class="text-white text-lg hover:text-dark transition-colors duration-300">Projecten</a>
        <a href="{{route('service.index')}}" class="text-white text-lg hover:text-dark transition-colors duration-300">Diensten</a>
        <a href="{{route('contact.index')}}" class="text-white text-lg hover:text-dark transition-colors duration-300">Contact</a>
      </div>
    </div>
  </nav>
</header>
