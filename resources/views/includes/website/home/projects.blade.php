<div class="px-8 md:px-16 lg:px-32 py-16 lg:py-24 md:py-48 w-full justify-center">
    <h1 class="text-foreground text-center w-full text-5xl font-normal md:tracking-tight text-dark dark:text-white">
        Een greep uit ons werk.
    </h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16 lg:mt-24">
        @foreach($this->projects as $project)
            <x-project-card :project="$project" />
        @endforeach
    </div>
    <x-inputs.button variant="primary" label="Bekijk alle projecten" href="{{ route('project.index') }}" class="mt-16 mx-auto" />
</div>