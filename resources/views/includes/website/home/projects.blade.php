<div class="flex flex-col items-end w-full mt-16 -space-x-2 px-32">
    <h1 class="text-4xl text-zinc-700">Recente Projecten</h1>
    <div class="w-12 h-1 bg-primary rounded-full mt-4"></div>
</div>
<div class="mx-auto max-w-7xl px-6 lg:flex lg:items-center lg:gap-x-10 lg:px-8 py-16">
    <div class="grid grid-cols-3 w-full gap-8">
        @foreach($this->projects as $project)
            <x-project-card :project="$project" />
        @endforeach
    </div>
</div>
<div class="flex justify-center w-full">
    <x-button>
        <div class="flex space-x-2 items-center">
            <span>Bekijk alle projecten</span>
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
        </div>
    </x-button>
</div>