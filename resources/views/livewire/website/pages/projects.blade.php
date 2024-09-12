<x-layouts.app>
    <div class="px-32">
        <h1 class="text-4xl text-stone-700 font-light pt-32">Projecten</h1>
        <div class="flex items-center w-full space-x-4 mt-16">
            <span class="text-sm text-stone-500">Filter op:</span>
            <div class="rounded-full bg-orange-500 px-2 cursor-pointer">
                <span class="text-xs text-white">Alle projecten</span>
            </div>
            <div class="px-2 rounded-full bg-stone-200 hover:bg-orange-500 hover:text-white transition duration-300 cursor-pointer">
                <span class="text-xs">Nieuwbouw</span>
            </div>
            <div class="px-2 rounded-full bg-stone-200 hover:bg-orange-500 hover:text-white transition duration-300 cursor-pointer">
                <span class="text-xs">Aanbouw</span>
            </div>
        </div>
        <div class="mt-8 grid grid-cols-4 gap-6">
           <x-project-card wire:click="showProject({{1}})" />
           <x-project-card />
           <x-project-card />
           <x-project-card />
           <x-project-card />
           <x-project-card />
           <x-project-card />
           <x-project-card />
        </div>
    </div>
    <x-footer />
</x-layouts.app>