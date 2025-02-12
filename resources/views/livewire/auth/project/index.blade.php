<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center border-b pb-4">
        <div class="sm:flex-auto">
            <h1 wire:click="test" class="cursor-pointer text-xl leading-6 text-gray-900">Projecten</h1>
            <p class="mt-2 text-sm text-gray-700">Creeër, bewerk en verwijder projecten</p>
        </div>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <x-button wire:click="$dispatch('create-project')" label="Project toevoegen" icon="plus" />
        </div>
    </div>
    <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-start sm:px-6 lg:px-8">
                <table class="min-w-full divide-y">
                    <thead>
                    <tr>
                        <th scope="col" class="pr-3 py-3.5 text-left text-sm font-medium text-gray-900">Titel</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-medium text-gray-900">Beschrijving</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-medium text-gray-900">Categorie</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-medium text-gray-900">Uitgelicht</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-medium text-gray-900">Gepubliceerd</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-medium text-gray-900">Uitgevoerd op</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-medium text-gray-900"></th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($this->projects as $project)
                            <tr>
                                <td class="whitespace-nowrap py-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                                    {{ $project->title }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    {{ $project->description }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    {{ $project->category->name }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    @if($project->featured)
                                        <svg class="text-primary w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                                    @endif
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    @if($project->status === App\Enum\StatusEnum::PUBLISHED)
                                        <svg class="text-primary w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                                    @endif
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                   {{ $project->execution_date->format('d-m-Y') }}
                                </td>
                                <td class="flex items-center space-x-4 relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                    <x-button-link label="Bewerken" wire:key="{{$project->id}}" wire:click="$dispatch('update-project', { project: {{ $project->id }} })" />
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-4">
            {{ $this->projects->links() }}
        </div>
    </div>
    <livewire:auth.project.components.project-modal />
</div>