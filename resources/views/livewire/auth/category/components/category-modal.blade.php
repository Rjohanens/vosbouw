<div x-data="{ isOpen: @entangle('show').live }" x-on:keydown.escape.window="isOpen = false" x-cloak class="w-full">
    <div x-show="isOpen" class="fixed inset-0 flex items-center justify-center w-full z-50 bg-black bg-opacity-50">
        <div x-show="isOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-[-10px]" x-transition:enter-end="opacity-100 translate-y-0" x-on:click.outside="isOpen = false" class="relative bg-white rounded-lg shadow-lg w-full max-w-2xl p-4 max-h-[calc(100vh-100px)] overflow-y-auto">
            <div class="flex justify-between items-center">
                <h3 class="text-lg">Category aanmaken</h3>
            </div>
            <div class="grid grid-cols-1 gap-4 my-6">
                <x-input label="Naam" name="name" wire:model.live="name"></x-input>
            </div>
            <div class="flex justify-end space-x-2 sticky -bottom-4 bg-white p-4">
                <x-button-link label="Annuleren" wire:click="close"></x-button-link>
                <x-inputs.button variant="primary" wire:click="save" label="Opslaan" />
            </div>
        </div>
    </div>
</div>
