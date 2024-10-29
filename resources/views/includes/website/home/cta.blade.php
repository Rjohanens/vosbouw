<div class="grid grid-cols-2 gap-x-16 px-16 py-32">
    <div class="flex flex-col">
        <h1 class="text-4xl text-zinc-700">Wij staan voor u klaar</h1>
        <p class="text-sm font-light text-zinc-700 leading-6 mt-6 max-w-lg">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda tempora temporibus at accusantium quos, quidem, quas, voluptates quae quia doloribus.
        </p>
        <div class="flex flex-col w-fit rounded-lg space-y-2 mt-6 p-4 bg-secondary">
            <div class="flex items-center space-x-2">
                <svg class="w-4 h-4 text-zinc-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                <span class="font-light text-zinc-700 text-sm">Straat 123, 1234 AB Groningen</span>
            </div>
            <div class="flex items-center space-x-2">
                <svg class="w-4 h-4 text-zinc-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                <span class="font-light text-zinc-700 text-sm">+31 6 123 456 78</span>
            </div>
            <div class="flex items-center space-x-2">
                <svg class="w-4 h-4 text-zinc-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                <span class="font-light text-zinc-700 text-sm">info@vosbouwnoord.nl</span>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="flex flex-col w-full max-w-lg rounded-lg p-6 bg-secondary">
            <h1 class="text-2xl">Neem contact op</h1>
            <p class="text-sm font-light text-zinc-700 leading-6 mt-4">
                Heeft u een vraag of wilt u een offerte aanvragen? Neem dan contact met ons op. Wij helpen u graag verder.
            </p>
                @if (session()->has('success-message'))
                    <div class="bg-green-200 rounded-md mt-6 py-1 px-4">
                        <span class="text-green-700 text-sm font-light"> 
                            {{ session('success-message') }} 
                        </span>
                    </div>
                @endif
            <div class="grid grid-cols-2 gap-4 gap-y-6 mt-8">
                <div class="flex flex-col space-y-0.5">
                    <input wire:model.live="form.firstName" type="text" name="firstName" class="block w-full rounded-xl border-0 py-2 px-4 text-zinc-700 shadow-sm ring-1 ring-inset ring-zinc-200 placeholder:text-zinc-400 placeholder:font-extralight focus:outline-none focus:ring-2 focus:ring-inset focus:ring-zinc-300 sm:text-sm sm:leading-6" placeholder="Voornaam" />  
                    <span class="text-sm text-red-500 font-light">
                        @error('form.firstName')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="flex flex-col space-y-0.5">
                    <input wire:model.live="form.lastName" type="text" name="last_name" class="block w-full rounded-xl border-0 py-2 px-4 text-zinc-700 shadow-sm ring-1 ring-inset ring-zinc-200 placeholder:text-zinc-400 placeholder:font-extralight focus:outline-none focus:ring-2 focus:ring-inset focus:ring-zinc-300 sm:text-sm sm:leading-6" placeholder="Achternaam" />   
                    <span class="text-sm text-red-500 font-light">
                        @error('form.lastName')
                            {{ $message }}
                        @enderror
                    </span>    
                </div>
                <div class="flex flex-col col-span-2 space-y-0.5">
                    <input wire:model.live="form.email" type="email" name="email" class="block col-span-2 w-full rounded-xl border-0 py-2 px-4 text-zinc-700 shadow-sm ring-1 ring-inset ring-zinc-200 placeholder:text-zinc-400 placeholder:font-extralight focus:outline-none focus:ring-2 focus:ring-inset focus:ring-zinc-300 sm:text-sm sm:leading-6" placeholder="E-mailadres" />  
                    <span class="text-sm text-red-500 font-light">
                        @error('form.email')
                            {{ $message }}
                        @enderror
                    </span>  
                </div>
                <div class="flex flex-col col-span-2 space-y-0.5">
                    <input wire:model.live="form.phone" type="text" name="phone" class="block col-span-2 w-full rounded-xl border-0 py-2 px-4 text-zinc-700 shadow-sm ring-1 ring-inset ring-zinc-200 placeholder:text-zinc-400 placeholder:font-extralight focus:outline-none focus:ring-2 focus:ring-inset focus:ring-zinc-300 sm:text-sm sm:leading-6" placeholder="Telefoon nr." />    
                    <span class="text-sm text-red-500 font-light">
                        @error('form.phone')
                            {{ $message }}
                        @enderror
                    </span>  
                </div>
                <div class="flex flex-col col-span-2 space-y-0.5">
                    <textarea wire:model.live="form.message" rows="4" name="comment" id="comment" class="block col-span-2 w-full rounded-xl border-0 py-2 px-4 text-zinc-700 shadow-sm ring-1 ring-inset ring-zinc-200 placeholder:text-zinc-400 placeholder:font-extralight focus:outline-none focus:ring-2 focus:ring-inset focus:ring-zinc-300 sm:text-sm sm:leading-6" placeholder="Beschrijf uw project of vraag"></textarea>
                    <span class="text-sm text-red-500 font-light">
                        @error('form.message')
                            {{ $message }}
                        @enderror
                    </span>  
                </div>
                <button wire:click="submitContactForm" class="col-span-2 w-full rounded-xl bg-orange-500 text-white py-2 px-4 text-center">Versturen</button>
                <p class="col-span-2 text-sm text-zinc-400 font-light text-center">Door dit formulier te gebruiken gaat u akkoord met de opslag en verwerking van uw gegevens door deze website.</p>
            </div>
        </div>
    </div>
</div>