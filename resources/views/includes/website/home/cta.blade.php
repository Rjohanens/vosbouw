<div class="flex flex-col items-center px-16 my-32">
    <h1 class="text-4xl text-zinc-700">Neem contact op</h1>
    <div class="w-full max-w-xl mt-16">
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