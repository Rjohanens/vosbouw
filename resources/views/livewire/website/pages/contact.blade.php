<div class="relative isolate bg-white">
    <div class="mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2">
      <div class="relative px-6 pb-20 pt-24 sm:pt-32 lg:static lg:px-8 lg:py-48">
        <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
            <h1 class="lg:text-5xl text-zinc-900 font-medium">Neem vrijblijvend contact op</h1>
            <p class="mt-6 text-lg/8 text-zinc-600 font-light">
                Heeft u vragen of wilt u een offerte aanvragen? Neem dan contact met ons op via het formulier. Wij nemen zo spoedig mogelijk contact met u op.
            </p>
          <dl class="mt-10 space-y-4 text-base/7 text-gray-600">
            <div class="flex items-center gap-x-4">
              <dt class="flex-none">
                <span class="sr-only">Address</span>
                <svg class="w-4 h-4 text-orange-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>

              </dt>
              <dd>Nieuweweg 92, 9649 AG Muntendam</dd>
            </div>
            <div class="flex items-center gap-x-4">
              <dt class="flex-none">
                <span class="sr-only">Telephone</span>
                <svg class="w-4 h-4 text-orange-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>

              </dt>
              <dd>+ 31(0) 6 203 213 30</dd>
            </div>
            <div class="flex items-center gap-x-4">
              <dt class="flex-none">
                <span class="sr-only">Email</span>
                <svg class="w-4 h-4 text-orange-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
              </dt>
              <dd><a class="hover:text-gray-900" href="mailto:hello@example.com">info@vosbouwnoord.nl</a></dd>
            </div>
          </dl>
        </div>
      </div>
      <div class="px-6 pb-24 pt-20 sm:pb-32 lg:px-8 lg:py-48">
        <div class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg">
          <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div>
              <label for="first-name" class="block text-sm/6 text-gray-900">Voornaam <span class="text-red-500">*</span></label>
              <div class="mt-2.5">
                <input wire:model.live="form.firstName" type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-zinc-600 sm:text-sm/6">
                @error('form.firstName')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            </div>
            <div>
              <label for="last-name" class="block text-sm/6 text-gray-900">Achternaam <span class="text-red-500">*</span></label>
              <div class="mt-2.5">
                <input wire:model.live="form.lastName" type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-zinc-600 sm:text-sm/6">
                @error('form.lastName')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror  
            </div>
            </div>
            <div class="sm:col-span-2">
              <label for="email" class="block text-sm/6 text-gray-900">Email <span class="text-red-500">*</span></label>
              <div class="mt-2.5">
                <input wire:model.live="form.email" type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-zinc-600 sm:text-sm/6">
                @error('form.email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            </div>
            <div class="sm:col-span-2">
              <label for="phone-number" class="block text-sm/6 text-gray-900">Telefoon</label>
              <div class="mt-2.5">
                <input wire:model.live="form.phone" type="tel" name="phone-number" id="phone-number" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-zinc-600 sm:text-sm/6">
                @error('form.phone')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            </div>
            <div class="sm:col-span-2">
              <label for="message" class="block text-sm/6 text-gray-900">Bericht <span class="text-red-500">*</span></label>
              <div class="mt-2.5">
                <textarea wire:model.live="form.message" name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-zinc-600 sm:text-sm/6"></textarea>
                @error('form.message')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            </div>
          </div>
          <div class="mt-4">
            <span class="text-zinc-500 font-light text-sm">Door dit formulier te gebruiken gaat u akkoord met de opslag en verwerking van uw gegevens door deze website.</span>
          </div>
          <div class="mt-8 flex justify-end">
            <button wire:click="store" type="button" class="btn btn-brand">Versturen</button>
          </div>
        </div>
    </div>
    </div>
  </div>