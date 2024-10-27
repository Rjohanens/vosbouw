<div class="px-4 sm:px-6 lg:px-8 max-w-2xl w-full">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 wire:click="test" class="cursor-pointer text-2xl leading-6 text-gray-900">Project aanmaken</h1>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-6 mt-8">
        <div class="col-span-2">
            <h1 class="text-base">1. Project informatie</h1>
        </div>
        <div class="col-span-2">
            <input type="text" wire:model.live="title" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary sm:text-sm" placeholder="Locatie">
        </div>
        <div>
            <input type="date" wire:model.live="execution_date" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary sm:text-sm" placeholder="Uitvoerdatum">
        </div>
        <div>
            <input type="text" wire:model.live="category_id" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary sm:text-sm" placeholder="Categorie">
        </div>
        <div class="col-span-2">
            <textarea wire:model.live="description" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary sm:text-sm" placeholder="Beschrijving"></textarea>
        </div>
    </div>
    <div class="flex flex-col mt-6">
        <div class="col-span-2">
            <h1 class="text-base">2. Afbeeldingen</h1>
        </div>
        <div class="col-span-2">
            <input type="file" multiple wire:model.live="images" class="mt-6 w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary sm:text-sm">
        </div>
        <div class="flex flex-col space-y-2 mt-4">
            @forelse($images as $images)
               <div class="flex border rounded-md p-4">
                     <img src="{{ $images->temporaryUrl() }}" class="w-5 h-5" alt="" />
                    <span class="ml-2">{{ $images->getClientOriginalName() }}</span>
               </div>
            @empty
            @endforelse
        </div>
    </div>

    <div class="flex justify-between mt-6">
        <a href="{{ route('auth.project.index') }}" class="flex items-center space-x-2 rounded-md bg-gray-200 px-4 py-2 text-center text-sm font-lighth text-gray-900 shadow-sm hover:bg-gray-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-500 cursor-pointer">
            <span>Annuleren</span>
        </a>
        <button wire:click="store" class="flex items-center space-x-2 rounded-md bg-primary px-4 py-2 text-center text-sm font-lighth text-white shadow-sm hover:bg-orange400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-500 cursor-pointer">
            <span>Project aanmaken</span>
        </button>
    </div>
</div>
