<div class="px-8 lg:px-32 py-24 lg:py-32">
    <h1 class="text-4xl text-zinc-700">Diensten</h1>
    <div class="w-12 h-1 bg-primary rounded-full mt-4"></div> 
    <div class="grid grid-cols-1 lg:grid-cols-3 w-full gap-8 mt-16">
        @foreach($this->services as $service)
            <x-service-card :service="$service"></x-service-card>
        @endforeach
    </div>
</div>