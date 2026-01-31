<div class="px-8 lg:px-32 py-24 lg:py-32">
    <div class="h-2 w-24 bg-dark mb-4 rounded"></div>
    <h1 class="text-4xl font-medium text-dark">
        Diensten
    </h1>
    <div class="grid grid-cols-1 lg:grid-cols-3 w-full gap-8 mt-16">
        @foreach($this->services as $service)
            <x-service-card :service="$service"></x-service-card>
        @endforeach
    </div>
</div>