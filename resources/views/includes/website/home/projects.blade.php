<div class="px-8 md:px-16 lg:px-32 py-24 md:py-48 w-full justify-center">
    <h1 class="text-foreground text-center w-full text-3xl font-normal md:tracking-tight text-dark sm:text-5xl dark:text-white">
        Een greep uit ons werk.
    </h1>
    <div class="grid grid-cols-3 gap-8 mt-24">
        @foreach($this->projects as $project)
            <x-project-card :project="$project" />
        @endforeach
    </div>
    <x-inputs.button variant="primary" label="Bekijk alle projecten" href="{{ route('project.index') }}" class="mt-16 mx-auto" />
</div>