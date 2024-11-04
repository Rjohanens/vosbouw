<div class="grid grid-cols-2 gap-x-16 px-16 py-32" id="contact">
    <div class="flex flex-col">
        <h1 class="text-4xl text-zinc-700">Waar <span class="text-primary font-medium">Vos Bouw</span> voor staat</h1>
        <p class="text-sm font-light text-zinc-700 leading-6 mt-6 max-w-lg">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda tempora temporibus at accusantium quos, quidem, quas, voluptates quae quia doloribus.
        </p>
        <div class="flex flex-col space-y-4 mt-16 font-light text-sm text-zinc-700">
            <span>info@vosbouwnoord.nl</span>
            <span>+31 6 123 456 78</span>
        </div>
        <div class="grid grid-cols-3 gap-x-8 mt-16">
           <div class="flex flex-col space-y-2">
               <h1 class="text-base">Kwaliteit</h1>
               <span class="text-xs font-light text-zinc-700 leading-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit voluptatem </span>
           </div>
           <div class="flex flex-col space-y-2">
                <h1 class="text-base">Kwaliteit</h1>
                <span class="text-xs font-light text-zinc-700 leading-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit voluptatem </span>
            </div>
            <div class="flex flex-col space-y-2">
                <h1 class="text-base">Kwaliteit</h1>
                <span class="text-xs font-light text-zinc-700 leading-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit voluptatem </span>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="flex flex-col w-full max-w-lg rounded-lg p-6 bg-secondary">
            <h1 class="text-3xl">Neem contact op</h1>
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