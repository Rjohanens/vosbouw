<div>
    <x-navbar />
    <div class="relative isolate">
        <svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
            <defs>
                <pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                    <path d="M100 200V.5M.5 .5H200" fill="none" />
                </pattern>
            </defs>
            <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
            </svg>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)" />
        </svg>
        <div class="mx-auto max-w-7xl px-6 py-12 sm:py-32 lg:flex lg:items-center lg:gap-x-10 lg:px-8 lg:py-32">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:flex-auto">
                <h1 class="mt-10 max-w-lg text-4xl font-semibold tracking-tight text-orange-500 sm:text-6xl">Bouwen Met Vertrouwen</h1>
                <p class="mt-6 text-lg leading-8 text-gray-700">Transparantie, betrouwbaarheid en topkwaliteit vormen de kern van onze bouwdiensten, voor een zorgeloos bouwproces. Ons toegewijde team staat altijd klaar om uw vragen te beantwoorden en u door elke stap van het project te begeleiden.</p>
                <div class="mt-10 flex items-center gap-x-6">
                    <a href="#" class="rounded-md bg-orange-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-orange-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Offerte aanvragen</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-700">Contact opnemen <span aria-hidden="true">→</span></a>
                </div>
            </div>
            <div class="mt-8 sm:mt-24 lg:mt-0 lg:flex-shrink-0 lg:flex-grow">
                <div class="flex justify-end w-full">
                    <div class="bg-gray-200 aspect-square rounded-lg shadow w-3/4"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center w-full mt-16 -space-x-2">
        <h1 class="text-4xl font-bold">Recente Projecten</h1>
        <div class="w-12 h-1 bg-orange-500 mt-4"></div>
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:flex lg:items-center lg:gap-x-10 lg:px-8 py-16">
        <div class="grid grid-cols-3 w-full gap-8">
            <x-project-card />
            <x-project-card />
            <x-project-card />
            <x-project-card />
            <x-project-card />
            <x-project-card />
        </div>
    </div>
    <div class="mt-24 bg-gray-950">
        <div class="grid grid-cols-2 px-16 pt-24">
            <div class="flex flex-col space-y-16">
                <div>
                    <h1 class="text-4xl font-bold text-white">Diensten</h1>
                    <div class="w-12 h-1 bg-orange-500 mt-4"></div>
                </div>
            </div>
            <div>
                <p class="text-gray-300 text-sm leading-8">
                    Bij Vosbouw bieden we een breed scala aan bouwdiensten die voldoen aan de hoogste kwaliteitsnormen. Ons ervaren team is gespecialiseerd in zowel nieuwbouw als renovaties, en levert maatwerkoplossingen die perfect aansluiten bij uw wensen. Van het eerste ontwerp tot de uiteindelijke oplevering, zorgen we voor een soepel en transparant proces.
                </p>
            </div>
        </div>
        <div class="grid grid-cols-4 w-full gap-8 p-16">
            <x-service-card />
            <x-service-card />
            <x-service-card />
            <x-service-card />
        </div>
    </div>
</div>
