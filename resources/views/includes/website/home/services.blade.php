<div x-data="{ tabIndex: 0 }" class=" bg-white py-6 lg:py-32 mt-16" >
    <div class="grid grid-cols-1 lg:grid-cols-2 px-8 lg:px-16" x-cloak x-data="{ intersecting: false }" x-intersect="intersecting = true" :class="{ 'animate-fade-in-up': intersecting }">
        <div class="flex flex-col">
            <div class="flex flex-col items-center lg:items-start">
                <h1 class="text-3xl lg:text-5xl text-zinc-900 font-medium">Onze diensten</h1>
                <div class="w-12 h-1.5 bg-primary rounded-full mt-4"></div>
            </div>
            <div class="hidden lg:flex flex-col divide-y divide-zinc-300 mt-8 cursor-pointer">
                @foreach($this->services as $service)
                    <div x-on:click="tabIndex = {{$loop->index}}" :class="tabIndex == {{ $loop->index }} ? '!bg-orange-500 !text-white': ''" class="flex justify-between p-4 text-base font-normal text-zinc-700  hover:bg-zinc-200 transition duration-300">
                        <span>{{ $service->name }} </span>
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="hidden lg:flex">
            @foreach($this->services as $service)
                <div x-show="tabIndex === {{$loop->index}}" class="flex flex-col pl-16">
                    <div class="w-full bg-zinc-300 aspect-video rounded-lg">
                        <img class="object-cover w-full h-full rounded-lg" src="{{ $service->thumbnail()?->getUrl() }}" alt="{{ $service->name }}">
                    </div>
                    <p class="mt-6 text-sm leading-7 font-light text-zinc-700">
                        {{ $service->description }}
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('service.show', $service) }}" class="mt-8">
                            <div class="flex space-x-2 items-center">
                                <span>Lees meer</span>
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                            </div>
                        </a>
                        <div class="flex items-center space-x-2 py-3">
                            <svg @click="tabIndex = (tabIndex === 0) ? {{ count($this->services) - 1 }} : tabIndex - 1" class="w-4 h-4 text-zinc-400 hover:text-zinc-600 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
                            <svg @click="tabIndex = (tabIndex === {{count($this->services) - 1}}) ? 0 : tabIndex + 1" class="w-4 h-4 text-zinc-400 hover:text-zinc-600 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="lg:hidden flex flex-col gap-y-4 mt-8">
            @foreach($this->services as $service)
                <div 
                    x-data="{expanded: false}" 
                    x-on:click="expanded = !expanded" 
                    class="flex flex-col p-4 border border-zinc-200 hover:border-zinc-400 transition duration-300 cursor-pointer"
                >
                    <div class="flex items-center justify-between w-full z-20">
                        <span class="text-base font-normal text-zinc-700">
                            {{ $service->name }}
                        </span>
                        <svg class="w-4 h-4 text-zinc-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>     
                    </div>  
                    <div 
                        x-cloak
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="scale-y-0 -translate-y-full"
                        x-transition:enter-end="scale-y-100 translate-y-0"
                        x-transition:leave=""
                        x-transition:leave-start="scale-y-100 translate-y-0"
                        x-transition:leave-end="scale-y-0 -translate-y-full"
                        x-show="expanded" 
                        class="flex flex-col space-y-4 mt-2"
                    >
                        <p class="text-sm leading-7 font-light text-zinc-700">
                            {{ $service->description }}
                        </p>
                        <a href="{{ route('service.show', $service) }}" class="text-sm text-zinc-700 mt-6">
                            <div class="flex space-x-2 items-center">
                                <span>Lees meer</span>
                                <svg class="w-3 h-3 text-zinc-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>