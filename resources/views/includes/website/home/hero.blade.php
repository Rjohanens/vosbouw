 <div class="relative isolate overflow-hidden pt-14">
    <div class="mx-auto max-w-7xl px-6 py-32 sm:py-40 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-8 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
        <h1 class="max-w-2xl text-balance text-5xl font-medium tracking-tight text-dark sm:text-7xl lg:col-span-2 xl:col-auto dark:text-white">
            Uw bouwpartner in de regio.
        </h1>
        <div class="mt-6 max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">
          <p class="text-pretty text-base font-light text-dark/70 sm:text-xl/8 dark:text-zinc-400">
            Bij Vos Bouw staan kwaliteit, betrouwbaarheid en klanttevredenheid centraal. Met jarenlange ervaring in de bouwsector realiseren wij uw droomproject van begin tot eind.
          </p>
          <div class="mt-10 flex items-center gap-x-4 lg:gap-x-6">
            <x-inputs.button variant="primary" label="Neem contact op" href="{{ route('contact.index') }}" />
            <x-inputs.button variant="outline" label="Diensten →" href="#contact" class="!border-zinc-500 hover:!bg-dark !text-dark hover:!text-white" />
          </div>
        </div>
        <img src="{{ asset('images/hero.jpg')}}" alt="" class="mt-10 aspect-[6/5] w-full max-w-lg rounded-2xl object-cover outline outline-1 -outline-offset-1 outline-black/5 sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-36 dark:outline-white/10" />
      </div>
    </div>
    <div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-white sm:h-32 dark:from-gray-900"></div>
  </div>