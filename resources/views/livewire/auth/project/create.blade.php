<div class="px-4 sm:px-6 lg:px-8 max-w-2xl w-full">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 wire:click="test" class="cursor-pointer text-2xl leading-6 text-gray-900">Project aanmaken</h1>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-6 mt-8">
        <div class="col-span-2">
            <h1 class="text-lg font-medium">1. Project informatie</h1>
        </div>
        <div class="col-span-2">
            <label for="title" class="block text-sm text-gray-700 mb-2">Titel</label>
            <input type="text" wire:model.live="title" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary sm:text-sm" placeholder="Titel van het project">
            @if($errors->has('title'))
                <span class="text-xs text-red-500">{{ $errors->first('title') }}</span>
            @endif
        </div>
        <div>
            <label for="title" class="block text-sm text-gray-700 mb-2">Uitvoer datum</label>
            <input type="date" wire:model.live="execution_date" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary sm:text-sm" placeholder="Uitvoerdatum">
            @if($errors->has('execution_date'))
                <span class="text-xs text-red-500">{{ $errors->first('execution_date') }}</span>
            @endif
        </div>
        <div x-data="{expanded: false}" x-on:click.outside="expanded = false">
            <label for="title" class="block text-sm text-gray-700 mb-2">Categorie</label>
            <div class="relative mt-2">
                <button x-on:click="expanded = !expanded" type="button" class="relative w-full cursor-default rounded-md bg-white py-2 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600 sm:text-sm/6" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                    <span class="block truncate">{{ $selectedCategory->name ?? 'Selecteer categorie' }}</span>
                    <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M10.53 3.47a.75.75 0 0 0-1.06 0L6.22 6.72a.75.75 0 0 0 1.06 1.06L10 5.06l2.72 2.72a.75.75 0 1 0 1.06-1.06l-3.25-3.25Zm-4.31 9.81 3.25 3.25a.75.75 0 0 0 1.06 0l3.25-3.25a.75.75 0 1 0-1.06-1.06L10 14.94l-2.72-2.72a.75.75 0 0 0-1.06 1.06Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
                <ul x-show="expanded" x-cloak class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
                    @foreach($this->categories as $category)
                        <li wire:click="selectCategory({{$category->id}})" class="group relative select-none py-2 pl-3 pr-9 text-gray-900 hover:bg-primary hover:text-white cursor-pointer" id="listbox-option-0" role="option">
                            <span class="block truncate font-normal">
                                {{ $category->name }}
                            </span>

                            @if($selectedCategory && $category->id == $selectedCategory->id)
                                <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-primary group-hover:text-white">
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
            @if($errors->has('selectedCategory'))
                <span class="text-xs text-red-500">{{ $errors->first('selectedCategory') }}</span>
            @endif
        </div>
        <div class="col-span-2">
            <label for="title" class="block text-sm text-gray-700 mb-2">Beschrijving</label>
            <textarea wire:model.live="description" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary sm:text-sm" placeholder="Beschrijf het project"></textarea>
            @if($errors->has('description'))
                <span class="text-xs text-red-500">{{ $errors->first('description') }}</span>
            @endif
        </div>
        <div class="flex flex-col space-y-2 col-span-2">
            <div class="flex items-center space-x-2">
                <input wire:model.live="featured" id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                <label for="comments" class="text-sm text-zinc-700">Zichtbaar op home</label>
            </div>
            <div wire:model.live="draft" class="flex items-center space-x-2">
                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                <label for="comments" class="text-sm text-zinc-700">Opslaan als concept</label>
            </div>
        </div>
    </div>
    <div class="flex flex-col mt-6">
        <div class="col-span-2">
            <h1 class="text-lg font-medium">2. Afbeeldingen</h1>
        </div>
        <div class="col-span-2">
            <input type="file" multiple wire:model.live="images" class="mt-6 w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary sm:text-sm">
            @if($errors->has('images'))
                <span class="text-xs text-red-500">{{ $errors->first('images') }}</span>
            @endif
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
