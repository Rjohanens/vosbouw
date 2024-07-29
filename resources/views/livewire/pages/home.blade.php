<div>
    <x-navbar />
    <div class="flex flex-col px-48" >
        <div class="flex items-center space-x-8 w-full mt-16 -ml-20">
            <div class="w-12 h-1 bg-orange-500"></div>
            <h1 class="text-4xl font-medium">Diensten</h1>
        </div>
        <div class="grid grid-cols-3 w-full gap-8 mt-16">
            <x-service-card />
            <x-service-card />
            <x-service-card />
            <x-service-card />
            <x-service-card />
            <x-service-card />
        </div>
    </div>
    <div class="flex items-center space-x-8 w-full px-16 mt-16">
        <div class="w-12 h-1 bg-orange-500"></div>
        <h1 class="text-4xl font-medium">Recente projecten</h1>
    </div>
    <div class="grid grid-cols-3 w-full gap-x-4 gap-y-8 mt-16 px-32">
        <x-project-card />
        <x-project-card />
        <x-project-card />
        <x-project-card />
        <x-project-card />
        <x-project-card />
    </div>
</div>
