<div class="flex flex-col w-full bg-foreground items-center">
    <div class="w-full px-6 py-24  lg:py-24 grid grid-cols-1 lg:grid-cols-4 gap-y-12 gap-x-8 lg:gap-x-16 xl:gap-x-32 max-w-7xl">
        <div class="lg:col-span-2">
            <h1 class="text-3xl text-background font-light">
                Klaar om uw project te realiseren?
            </h1>
            <p class="text-background/80 text-sm font-light mt-6 md:mt-4 mb-8">
                Wij staan klaar om uw visie tot leven te brengen. Neem vandaag nog vrijblijvend contact met ons op voor een persoonlijk gesprek en ontdek hoe wij met vakmanschap en oog voor detail uw ideale leefruimte kunnen realiseren.
            </p>
            <x-inputs.button variant="primary" label="Neem contact op" href="{{ route('contact.index') }}" />
        </div>
        <div>
            <h1 class="text-lg text-background font-light">
                Contactgegevens
            </h1>
            <p class="text-background/80 text-sm font-light mt-4 mb-2.5">
                Nieuweweg 92, 9649 AG Muntendam        
            </p>
            <p class="text-background/80 text-sm font-light mb-2.5">
                <a href="tel:+31620321330" class="underline hover:text-white">+ 31(0) 6 203 213 30</a>
            </p>
            <p class="text-background/80 text-sm font-light mb-2.5">
                <a href="mailto:info@mail.vosbouwnoord.nl" class="underline hover:text-white">
                    info@mail.vosbouwnoord.nl
                </a>
            </p>
        </div>
        <div>
            <h1 class="text-lg text-background font-light">
                Links
            </h1>
            <div class="flex flex-col mt-4 gap-2">
                <a href="{{ route('home') }}" class="text-background/80 text-sm font-light hover:underline">
                    Home
                </a>
                <a href="{{ route('service.index') }}" class="text-background/80 text-sm font-light hover:underline">
                    Diensten
                </a>
                <a href="{{ route('project.index') }}" class="text-background/80 text-sm font-light hover:underline">
                    Projecten
                </a>
                <a href="{{ route('contact.index') }}" class="text-background/80 text-sm font-light hover:underline">
                    Contact
                </a>
            </div>
        </div>
        <p class="text-background/60 text-xs font-light lg:col-span-2 mt-8 lg:mt-24">
            &copy; {{ date('Y') }} Vos Bouw. Alle rechten voorbehouden.
        </p>
    </div>
</div>