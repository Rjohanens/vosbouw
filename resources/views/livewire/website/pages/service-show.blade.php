<div class="grid grid-cols-1 lg:grid-cols-2 gap-x-0 lg:gap-x-16 w-full pt-24 lg:pt-32 mb-16 lg:mb-0 pb-8 lg:pb-24 px-8 lg:pl-32 bg-secondary h-screen">
    <div class="flex flex-col w-full justify-start items-start mt-8">
        <h1 class="text-6xl text-zinc-700 font-light tracking-tight">
            {{ $service->name }}
        </h1>

        <p class="mt-8 text-base leading-8 text-zinc-700 font-light">
            {{ $service->description }}
        </p>
        <div class="mt-8 lg:mt-10 flex items-center gap-x-6">
            <button type="button" class="bg-primary rounded-md text-white w-fit px-4 py-3 text-sm font-medium shadow-sm hover:bg-orange-500 hover:border-orange-500 hover:text-white transition duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">
                <div class="flex space-x-2 items-center">
                    <span>Neem contact op</span>
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                </div>
            </button>
        </div>
    </div>
    <div>
        <div class="flex flex-col w-full items-start lg:items-center">
            <div class="w-full lg:w-96 aspect-square bg-zinc-300 rounded-lg">
                <img id="mainImage" src="{{ $service->getThumbnailUrl() }}" alt="{{ $service->name }}" class="object-cover w-full h-full rounded-lg">
            </div>
            <div class="grid grid-cols-6 gap-2 w-full lg:w-96 mt-4">
                @forelse ($service->getMedia() as $image)
                    <div class="w-full aspect-square bg-zinc-200 rounded-lg">
                        <img src="{{ $image->getAvailableUrl(['optimized']) }}" alt="{{ $service->name }}" class="object-cover w-full h-full rounded-lg cursor-pointer" onclick="changeMainImage('{{ $image->getAvailableUrl(['optimized']) }}')">
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</div>
<script>
    function changeMainImage(url) {
        document.getElementById('mainImage').src = url;
    }
</script>