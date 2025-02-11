<div class="flex flex-col text-sm/6 text-gray-600">
    <label for="email" class="block text-sm/6 font-normal text-gray-900">Afbeldingen</label>
    <label for="file-upload" class="mt-2 relative cursor-pointer rounded-md bg-white text-gray-700 focus-within:outline-none hover:text-gray-500">
    <div class="rounded-md w-fit bg-primary px-3 py-2 text-sm font-normal text-white shadow-sm hover:bg-primary/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Upload afbeeldingen
    </div>
    <input {{$attributes->whereStartsWith('wire:model')}} id="file-upload" name="file-upload" type="file" class="sr-only" accept="image/*" multiple>
    </label>
</div>