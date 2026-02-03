 <div class="relative isolate overflow-hidden lg:pt-14 pt-8 bg-background">
    <div class="mx-auto w-full md:max-w-7xl px-6 py-24 sm:py-24 lg:px-8 lg:py-32">
      <div class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-8 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
        <h1 class="text-foreground text-balance w-full md:max-w-2xl text-4xl font-normal md:tracking-tight text-dark sm:text-6xl lg:text-7xl lg:col-span-2 xl:col-auto dark:text-white">
            Uw bouwpartner in de regio.
        </h1>
        <div class="mt-6 max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">
          <p class="text-muted-foreground text-pretty text-lg font-light text-dark/70 sm:text-xl/8">
            Bij Vos Bouw staan kwaliteit, betrouwbaarheid en klanttevredenheid centraal. Met jarenlange ervaring in de bouwsector realiseren wij uw droomproject van begin tot eind.
          </p>
          <div class="mt-8 lg:mt-12 grid grid-cols-2 md:flex items-center lg:gap-x-4">
            <x-inputs.button variant="primary" label="Neem contact op" href="{{ route('contact.index') }}" />
            <x-inputs.button variant="outline" label="Diensten" href="{{ route('service.index') }}" />
          </div>
        </div>
        <img src="{{ asset('images/hero.jpg')}}" alt="" class="mt-12 aspect-[6/5] w-full max-w-lg rounded-2xl object-cover outline outline-1 -outline-offset-1 outline-black/5 sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-36 dark:outline-white/10" />
      </div>
    </div>
    <div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-white sm:h-32 dark:from-gray-900"></div>
  </div>