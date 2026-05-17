<div class="grid grid-cols-1 md:grid-cols-2 px-8 md:px-16 lg:px-32 py-24 md:py-48 bg-foreground">
    <div>
        <h1 class="text-background w-full md:max-w-xl text-3xl font-normal md:tracking-tight text-dark sm:text-5xl lg:col-span-2 xl:col-auto dark:text-white">
            Waar wij goed in zijn.
        </h1>
        <p class="text-background/80 font-light text-sm/6 mt-4 mb-12 max-w-lg">
            Bij Vos Bouw bieden we een breed scala aan bouwdiensten om aan al uw behoeften te voldoen.
            Staat uw gewenste dienst er niet bij? Neem gerust contact met ons op, we denken graag met u mee!
        </p>
        <x-inputs.button variant="primary" label="Bekijk alle diensten" href="{{ route('service.index') }}" />
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-16 gap-y-12 md:gap-y-24 mt-16 md:mt-0">
        @foreach($this->services as $service)
            <div>
                <h2 class="text-background text-xl">{{ $service->name }}</h2>
                <p class="font-light text-background/80 text-sm/6 mt-2 line-clamp-4">{{ $service->description }}</p>
                <x-inputs.button variant="link" label="Lees meer" href="{{ route('service.show', $service) }}" class="mt-4 underline" />
            </div>
        @endforeach
    </div>
</div>