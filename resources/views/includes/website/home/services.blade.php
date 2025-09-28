<div class="grid grid-cols-1 md:grid-cols-2 sm:row-start-1 gap-x-16 px-8 md:px-16 lg:px-24 py-16 md:py-32 bg-secondary">
    <div class="flex flex-col space-y-4 mt-8 md:mt-0">
        <div class="flex space-x-4">
            <div class="w-52 h-64 rounded-md bg-dark">
                <img src="{{ asset('images/service_1.jpg')}}" alt="" class="w-full h-full object-cover rounded-md" />
            </div>
            <div class="w-72 h-64 aspect-square rounded-md bg-dark">
                <img src="{{ asset('images/service_2.jpg')}}" alt="" class="w-full h-full object-cover rounded-md" />
            </div>
        </div>
        <div class="flex space-x-4">
            <div class="w-72 h-64 rounded-md bg-dark">
                <img src="{{ asset('images/hero.jpg')}}" alt="" class="w-full h-full object-cover rounded-md" />
            </div>
            <div class="w-52 h-64 aspect-square rounded-md bg-dark">
                <img src="{{ asset('images/service_3.jpg')}}" alt="" class="w-full h-full object-cover rounded-md" />
            </div>
        </div>
    </div>
    <div class="order-first md:order-last">
        <div class="h-2 w-24 bg-dark mb-4 rounded"></div>
        <div class="hidden md:flex justify-between items-end w-full">
            <h1 class="text-4xl font-medium text-dark">
                Waar wij goed in zijn.
            </h1>
            <x-inputs.button variant="outline" label="Alle diensten →" href="{{ route('service.index') }}" class="!border-dark hover:!bg-dark !text-dark hover:!text-white" />
        </div>
        <div class="md:hidden flex flex-col space-y-4">
              <h1 class="text-4xl font-medium text-dark">
                Waar wij goed in zijn.
            </h1>
            <x-inputs.button variant="outline" label="Alle diensten →" href="{{ route('service.index') }}" class="!border-dark hover:!bg-dark !text-dark hover:!text-white" /> 
        </div>
        <div class="grid grid-cols-2 gap-8 mt-16">
            @foreach($this->services->take(4) as $service)
                 <div class="flex flex-col space-y-2 mb-4">
                    <h2 class="text-xl font-medium text-dark capitalize">
                        {{ $service->name }}
                    </h2>
                    <p class="text-gray-700 font-light leading-6 line-clamp-3">
                        {{ $service->description }}
                    </p>
                    <a href="{{ route('service.show', $service) }}" class="text-zinc-900 font-normal hover:underline">
                        Lees meer &rarr;
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>