<div class="px-8 lg:px-32 py-24 lg:py-32 overflow-x-hidden">
    <div class="h-2 w-24 bg-dark mb-4 rounded"></div>
    <h1 class="text-4xl font-medium text-dark">
        Projecten
    </h1>
    <div class="flex flex-wrap justify-start items-center w-full gap-4 mt-16">
        <span class="text-sm text-zinc-500 text-nowrap">Filter op:</span>
        <div wire:click="clearFilter" class="px-2 text-nowrap rounded-full hover:bg-orange-500 hover:text-white transition duration-300 cursor-pointer @if($filter === '') bg-primary text-white @else bg-zinc-200 text-zinc-700 @endif">
            <span class="text-xs">Alle projecten</span>
        </div>
        @foreach($this->categories as $category)
            <div wire:click="setFilter('{{$category->name}}')" class="px-2 rounded-full hover:bg-orange-500 hover:text-white transition duration-300 cursor-pointer @if($filter === Str::lower($category->name)) bg-primary text-white @else bg-zinc-200 text-zinc-700 @endif">
                <span class="text-xs">{{ $category->name }}</span>
            </div>
        @endforeach
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 w-full gap-8 mt-6">
        @foreach($this->projects as $project)
            <x-project-card :project="$project" />
        @endforeach
    </div>
    <div class="mt-8">
        {{ $this->projects->links() }}
    </div>
</div>