<div class="py-16 md:py-24 lg:py-32">
    <div class="flex flex-col items-start w-full px-8 md:px-16 lg:px-24">
        <div class="h-2 w-24 bg-dark mb-4 rounded"></div>
        <div class="hidden md:flex justify-between items-end w-full">
            <h1 class="text-4xl font-medium text-dark">
                Een greep uit ons werk.
            </h1>
            <x-inputs.button variant="outline" label="Alle projecten →" href="{{ route('project.index') }}" class="!border-dark hover:!bg-dark !text-dark hover:!text-white" />
        </div>
         <div class="md:hidden flex flex-col w-full space-y-4">
            <h1 class="text-4xl font-medium text-dark">
                Een greep uit ons werk.
            </h1>
            <x-inputs.button variant="outline" label="Alle projecten →" href="{{ route('project.index') }}" class="!border-dark hover:!bg-dark !text-dark hover:!text-white" />
        </div>
    </div>
    <div class="px-8 md:px-16 lg:px-24 mt-8">
        <div class="grid grid-cols-1 md:grid-cols-3 w-full gap-4">
            @foreach($this->projects as $project)
                @if(($loop->index === 0) || ($loop->index === 3))
                    <div class="col-span-1 md:col-span-2">
                        <x-project-card :project="$project" />
                    </div>
                @else
                    <x-project-card :project="$project" />
                @endif
            @endforeach
        </div>
    </div>
</div>