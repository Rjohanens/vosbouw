 <nav class="flex w-full items-center justify-between px-6 py-4 lg:px-8">
    <div class="flex lg:flex-1 z-50">
      <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
        <div class="flex items-center space-x-4">
          <img src="{{ asset('images/logo.png')}}" alt="" class="h-8 w-auto" />
          <div class="flex flex-col">
            <span class="text-navbar-foreground">Vos Bouw</span>
            <span class="text-xs text-navbar-foreground">Bouw- en aannemersbedrijf</span>
          </div>
        </div>
      </a>
    </div>
     <div class="flex lg:hidden">
      <button x-cloak x-show="!mobile" x-on:click="mobile = true" type="button" class="-m-2.5 inline-flex items-center justify-center p-2.5 text-white">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
          <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
       <button x-cloak x-show="mobile" x-on:click="mobile = false" type="button" command="close" commandfor="mobile-menu" class="-m-2.5 p-2.5 text-navbar-foreground">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
          <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-4">
        <x-navigation.link href="{{ route('home') }}" label="Home" />
        <x-navigation.link href="{{ route('project.index') }}" label="Projecten" />
        <x-navigation.link href="{{ route('service.index') }}" label="Diensten" />
        <x-navigation.link href="{{ route('contact.index') }}" label="Contact" />
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <x-inputs.button href="{{ route('contact.index') }}" variant="primary" label="Neem contact op" />
    </div>
  </nav>