 <nav class="flex w-full items-center justify-between px-6 py-4 lg:px-8">
    <div class="flex lg:flex-1">
      <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
        <div class="flex items-center space-x-4">
          <span class="sr-only">Vos Bouw</span>
          <img src="{{ asset('images/logo.png')}}" alt="" class="h-8 w-auto" />
          <div class="flex flex-col">
            <span class="text-navbar-foreground">Vos Bouw</span>
            <span class="text-xs text-navbar-foreground">Bouw- en aannemersbedrijf</span>
          </div>
        </div>
      </a>
    </div>
    <div class="hidden lg:flex lg:gap-x-4">
        <x-navigation.link href="{{ route('home') }}" label="Home" />
        <x-navigation.link href="{{ route('project.index') }}" label="Projecten" />
        <x-navigation.link href="{{ route('service.index') }}" label="Diensten" />
        <x-navigation.link href="{{ route('contact.index') }}" label="Contact" />
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <x-inputs.button variant="primary" label="Neem contact op" />
    </div>
  </nav>