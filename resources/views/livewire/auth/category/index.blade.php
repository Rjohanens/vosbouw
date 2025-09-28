<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center border-b pb-4">
        <div class="sm:flex-auto">
            <h1 class="cursor-pointer text-xl leading-6 text-gray-900">Categorieën</h1>
            <p class="mt-2 text-sm text-gray-700">Creeër, bewerk en verwijder categorieën</p>
        </div>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <x-inputs.button variant="primary" wire:click="$dispatch('create-category')" label="Category toevoegen" icon="plus" />
        </div>
    </div>
    <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-start sm:px-6 lg:px-8">
                <table class="min-w-full divide-y">
                    <thead>
                    <tr>
                        <th scope="col" class="pr-3 py-3.5 text-left text-sm font-medium text-gray-900">Naam</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-medium text-gray-900">Aantal projecten</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-medium text-gray-900"></th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($this->categories as $category)
                            <tr>
                                <td class="whitespace-nowrap py-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                                    {{ $category->name }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    {{ $category->projects_count }}
                                </td>
                                <td class="flex items-center space-x-4 relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                    <x-button-link label="Bewerken" wire:key="'update-'{{$category->id}}" wire:click="$dispatch('update-category', { category: {{ $category->id }} })" />
                                    <x-button-link class="!text-red-500" label="Verwijderen" wire:key="'delete-'{{$category->id}}" wire:click="deleteCategory({{$category->id}})" wire:confirm="Weet je zeker dat je deze category wil verwijderen?" />
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-4">
            {{ $this->categories->links() }}
        </div>
    </div>
    <livewire:auth.category.components.category-modal />
</div>