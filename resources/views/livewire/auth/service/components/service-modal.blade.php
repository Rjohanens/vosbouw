<div x-data="{ isOpen: @entangle('show').live }" x-on:keydown.escape.window="isOpen = false" x-cloak class="w-full">
    <div x-show="isOpen" class="fixed inset-0 flex items-center justify-center w-full z-50 bg-black bg-opacity-50">
        <div x-show="isOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-[-10px]" x-transition:enter-end="opacity-100 translate-y-0" x-on:click.outside="isOpen = false" class="relative bg-white rounded-lg shadow-lg w-full max-w-2xl p-4 max-h-[calc(100vh-100px)] overflow-y-auto">
            <div class="flex justify-between items-center">
                <h3 class="text-lg">Dienst aanmaken</h3>
            </div>
            <div class="grid grid-cols-2 gap-4 my-6">
                <x-input label="Titel" name="form.name" wire:model.live="form.name"></x-input>
                <x-select label="Status" name="status" selected="{{ $form->status->value }}">
                    @foreach($this->statuses as $status)
                        <x-select-option wire:click="selectStatus('{{$status->value}}')" label="{{$status->value}}" name="status-{{$status->value}}" wire:key="status-{{$status->value}}" selected="{{$status->value === $form->status->value}}"></x-select-option>
                    @endforeach
                </x-select>
                <x-select label="Uitgelicht" name="featured" selected="{{ $form->featured ? 'Ja' : 'Nee' }}">
                    <x-select-option wire:click="selectFeatured(true)" label="Ja" name="featured" selected="{{ $form->featured}}"></x-select-option>
                    <x-select-option wire:click="selectFeatured(false)" label="Nee" name="not-featured" selected="{{ ! $form->featured}}"></x-select-option>
                </x-select>
                <div class="col-span-2">
                    <x-textarea wire:model.live="form.description" name="form.description" label="Beschrijving" name="form.description"></x-textarea>
                </div>

                <div class="col-span-2">
                    <x-file-upload label="Afbeelding" name="images" wire:model.live="images"></x-file-upload>
                </div>

                <div class="grid grid-cols-4 gap-x-6 gap-y-2 col-span-2 mt-4">
                    @if($images)
                        @foreach($images as $image)
                        <div class="relative group flex gap-x-4">
                            <img src="{{ $image->temporaryUrl() }}" alt="Afbeelding" class="w-full object-cover rounded-lg">
                            <div class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                <x-button-icon icon="trash" wire:click="deleteImage({{$loop->index}})"></x-button-icon>
                            </div>
                        </div>
                        @endforeach
                    @endif
                    @if($form->service?->media)
                        @foreach($form->service?->media as $media)
                            <div class="relative group flex gap-x-4">
                                <img src="{{ $media->getAvailableUrl(['optimized']) }}" alt="Afbeelding" class="w-full object-cover rounded-lg">
                                <div class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                    <x-button-icon icon="trash" wire:click="deleteMedia({{$media->id}})"></x-button-icon>
                                </div>
                            </div>
                        @endforeach
                    @endif 
                </div>
            </div>
            <div class="flex justify-end space-x-2 sticky -bottom-4 bg-white p-4">
                <x-button-link label="Annuleren" wire:click="close"></x-button-link>
                <x-inputs.button variant="primary" wire:click="save" label="Opslaan" />
            </div>
        </div>
    </div>
</div>