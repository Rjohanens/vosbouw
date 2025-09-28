<div class="flex justify-center mt-8 lg:mt-0 px-8 lg:px-16">
    <div class="flex flex-col w-full items-start rounded-xl bg-dark py-8 lg:py-32 px-8 lg:px-44">
        <div class="flex-col w-full items-start" x-cloak x-data="{ intersecting: false }" x-intersect="intersecting = true" :class="{ 'animate-fade-in-up': intersecting }">
            <h1 class="text-3xl lg:text-6xl text-white font-normal animate-fade-up">
                Benieuwd naar de mogelijkheden?
            </h1>
            <div class="flex space-x-2 mt-8">
                <a href="{{ route('contact.index') }}" class="p-4 border border-white rounded-md text-white hover:text-dark hover:bg-white transition duration-300 hover:border-dark">Neem contact op</a>
            </div>
        </div>
    </div>
</div>