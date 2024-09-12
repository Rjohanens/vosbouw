<x-layouts.app>
<div>
    <div class="relative isolate bg-stone-100">
        <div class="py-32 px-32 grid grid-cols-2 w-full">
            <div class="flex w-full justify-center animate-fade-up animate-once animate-ease-out">
                <div class="max-w-lg">
                    <h1 class="mt-10 max-w-xl text-6xl text-stone-900 font-normal tracking-tight">
                        <span class="flex items-end text-stone-700 font-extralight text-6xl">
                            Vos Bouw
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                <path fill="currentColor" d="M72 352c66.3 0 120-53.7 120-120l0-72 0-32 0-32c0-35.3-28.7-64-64-64L64 32C28.7 32 0 60.7 0 96l0 64c0 35.3 28.7 64 64 64l64 0 0 8c0 30.9-25.1 56-56 56l-8 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l8 0z"/>
                            </svg>
                        </span>
                        Uw bouwpartner in de regio
                    </h1>
                </div>
            </div>
            <div class="mt-4 flex justify-center items-start w-full animate-fade-up animate-ease-out">
                <div class="flex flex-col max-w-sm">
                    <p class="mt-6 text-base leading-8 text-stone-700">Transparantie, betrouwbaarheid en topkwaliteit vormen de kern van onze bouwdiensten, voor een zorgeloos bouwproces.</p>
                    <div class="mt-10 flex items-center gap-x-6">
                        <x-button>
                            <div class="flex space-x-2 items-center">
                                <span>Onze diensten</span>
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                            </div>
                        </x-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-end w-full mt-16 -space-x-2 px-32">
        <h1 class="text-4xl text-stone-700 font-light">Recente Projecten</h1>
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
    <div class="flex justify-center w-full">
        <x-button>
            <div class="flex space-x-2 items-center">
                <span>Bekijk alle projecten</span>
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
            </div>
        </x-button>
    </div>
    @include('includes.website.services')
    <div class="flex px-16 my-32">
        <div class="w-1/2">
            <div class="flex flex-col max-w-xl">
                <h1 class="text-4xl font-semibold">
                    Vraag vrijblijvend een offerte aan voor uw project.
                </h1>
                <p class="mt-6 font-light text-gray-700 text-base">
                    Voor renovatie, aanbouw en zowel grote als kleine projecten, bent u bij ons aan het juiste adres. Stel gerust al uw vragen hier. We staan klaar om u te helpen!
                </p> 
                <div class="flex flex-col space-y-4 mt-12">
                    <div class="flex flex-row items-center gap-x-4">
                        <svg class="w-5 h-5 text-orange-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M352 192c0-88.4-71.6-160-160-160S32 103.6 32 192c0 15.6 5.4 37 16.6 63.4c10.9 25.9 26.2 54 43.6 82.1c34.1 55.3 74.4 108.2 99.9 140c25.4-31.8 65.8-84.7 99.9-140c17.3-28.1 32.7-56.3 43.6-82.1C346.6 229 352 207.6 352 192zm32 0c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192zm-240 0a48 48 0 1 0 96 0 48 48 0 1 0 -96 0zm48 80a80 80 0 1 1 0-160 80 80 0 1 1 0 160z"/></svg>
                        <span class="text-gray-700 font-light">Straat 123, 1234 AB Stad</span>
                    </div>
                    <div class="flex flex-row items-center gap-x-4">
                        <svg class="w-5 h-5 text-orange-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64c0 0 0 0 0 0C0 300.7 183.5 494.5 416 510.9c4.5 .3 9.1 .6 13.7 .8c0 0 0 0 0 0c0 0 0 0 .1 0c6.1 .2 12.1 .4 18.3 .4c0 0 0 0 0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM447.7 480C218.1 479.8 32 293.7 32 64c0 0 0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0s0 0 0 0c0-3.8 2.6-7 6.3-7.8l112-24c3.7-.8 7.5 1.2 9 4.7l48 112c1.4 3.3 .5 7.1-2.3 9.3l-40.6 33.2c-12.1 9.9-15.3 27.2-7.4 40.8c29.5 50.9 71.9 93.3 122.7 122.7c13.6 7.9 30.9 4.7 40.8-7.4l33.2-40.6c2.3-2.8 6.1-3.7 9.3-2.3l112 48c3.5 1.5 5.5 5.3 4.7 9l-24 112c-.8 3.7-4.1 6.3-7.8 6.3c-.1 0-.2 0-.3 0z"/></svg>
                        <span class="text-gray-700 font-light">+ 31(0) 6 123 456 78</span>
                    </div>
                    <div class="flex flex-row items-center gap-x-4">
                        <svg class="w-5 h-5 text-orange-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                        <span class="text-gray-700 font-light">+ 31(0) 6 123 456 78</span>
                    </div>
                    <div class="flex flex-row items-center gap-x-4">
                        <svg class="w-5 h-5 text-orange-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M64 96c-17.7 0-32 14.3-32 32l0 39.9L227.6 311.3c16.9 12.4 39.9 12.4 56.8 0L480 167.9l0-39.9c0-17.7-14.3-32-32-32L64 96zM32 207.6L32 384c0 17.7 14.3 32 32 32l384 0c17.7 0 32-14.3 32-32l0-176.4L303.3 337.1c-28.2 20.6-66.5 20.6-94.6 0L32 207.6zM0 128C0 92.7 28.7 64 64 64l384 0c35.3 0 64 28.7 64 64l0 256c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64L0 128z"/></svg>
                        <span class="text-gray-700 font-light">info@vosbouw.nl</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/2">
            <div class="grid grid-cols-2 gap-x-4 gap-y-12 content-normal">
                <div>
                    <label for="email" class="block text-sm font-normal leading-6 text-gray-900">
                        Naam <span class="text-orange-500">*</span>
                    </label>
                    <div class="mt-2">
                      <input type="email" name="email" id="email" class="block w-full rounded-md border-0 py-3 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:font-extralight focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500 sm:text-sm sm:leading-6" placeholder="Jan Jansen">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-normal leading-6 text-gray-900">
                        Email <span class="text-orange-500">*</span>
                    </label>
                    <div class="mt-2">
                      <input type="email" name="email" id="email" class="block w-full rounded-md border-0 py-3 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:font-extralight focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500 sm:text-sm sm:leading-6" placeholder="janjansen@voorbeeld.nl">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-normal leading-6 text-gray-900">
                        Telefoon <span class="text-orange-500">*</span>
                    </label>
                    <div class="mt-2"> 
                      <input type="email" name="email" id="email" class="block w-full rounded-md border-0 py-3 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:font-extralight focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500 sm:text-sm sm:leading-6" placeholder="06 123 456 78">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-normal leading-6 text-gray-900">Dienst</label>
                    <div class="mt-2">
                      <input type="email" name="email" id="email" class="block w-full rounded-md border-0 py-3 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:font-extralight focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500 sm:text-sm sm:leading-6" placeholder="Dienst">
                    </div>
                </div>  
                <div class="col-span-2">
                    <label for="email" class="block text-sm font-normal leading-6 text-gray-900">Omschrijving van uw project / vraag</label>
                    <div class="mt-2">
                        <textarea rows="4" name="comment" id="comment" class="block w-full rounded-md border-0 py-3 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 placeholder:font-extralight focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-orange-500 sm:text-sm sm:leading-6" placeholder="Beschrijf uw project of vraag"></textarea>
                    </div>
                </div> 
                <div class="col-span-2 relative flex items-start">
                    <div class="flex h-6 items-center">
                      <input name="privacy" type="checkbox" class="h-4 w-4 rounded border-gray-100 text-orange-500 focus:ring-orange-500">
                    </div>
                    <div class="ml-3 text-sm leading-6">
                      <span class="text-gray-500 font-extralight">Hierbij geef ik Vos Bouw toestemming om de hierboven door mij ingevulde persoonsgegevens op te slaan met als doel contact met mij op te nemen.*</span>
                    </div>
                </div>
                <x-button>
                    <div class="flex space-x-2 items-center">
                        <span>Versturen</span>
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                    </div>
                </x-button>            
            </div>
        </div>
    </div>
    <x-footer />
</div>
</x-layouts.app>