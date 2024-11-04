<header class="fixed z-50 w-full bg-secondary">
  <nav class="flex items-center justify-between px-16 py-4">
    <a href="{{route('home')}}">
      <div class="flex items-center space-x-4">
        <img class="h-12 w-auto" src="{{ asset('images/logo.png')}}" alt="">
        <div class="flex flex-col space-y-0">
            <h1 class="text-zinc-700 text-2xl font-medium">
                Vos Bouw
            </h1>
            <span class="text-zinc-700 text-sm">Bouw- en aannemersbedrijf</span>
        </div>
      </div>
    </a>
    <div class="flex gap-x-8 items-center justify-end">
      <a href="{{route('home')}}" class="text-sm hover:text-primary transition-colors duration-300 @if(Str::startswith($activeRouteName, 'home')) text-primary @else text-zinc-700 @endif">Home</a>
      <a href="{{route('project.index')}}" class="text-sm hover:text-primary transition-colors duration-300 @if(Str::startswith($activeRouteName, 'project')) text-primary @else text-zinc-700 @endif">Projecten</a>
      <a href="{{route('service.index')}}" class="text-sm hover:text-primary transition-colors duration-300 @if(Str::startswith($activeRouteName, 'service')) text-primary @else text-zinc-700 @endif">Diensten</a>      
      <a href="#contact" class="text-sm hover:text-primary transition-colors duration-300 @if(Str::startswith($activeRouteName, 'contact')) text-primary @else text-zinc-700 @endif">Contact</a>
    </div>
    <a href="#contact" class="bg-dark px-4 py-3 rounded-lg text-sm text-white shadow-sm hover:bg-orange-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Offerte aanvragen</a>
  </nav>
</header>