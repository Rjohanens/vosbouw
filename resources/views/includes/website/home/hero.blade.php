<div class="flex lg:h-screen bg-secondary pb-16 lg:pb-0 px-8 lg:px-0">
    <div class="flex w-full lg:w-1/2 mt-32 lg:mt-52">
        <div class="flex flex-col w-full max-w-2xl lg:pl-24">
            <h1 class="text-pretty text-4xl lg:text-6xl leading-12 font-medium tracking-tight text-zinc-900 animate-fade-in-up animate-delay-100">
                Uw <span class="text-primary">bouwpartner</span> in de regio
            </h1>
            <p class="text-base text-pretty leading-7 text-zinc-500 font-light mt-8 animate-fade-in animate-delay-500">
                Vos Bouw B.V. is een bouw- en aannemersbedrijf dat zich richt op nieuwbouw, verbouw, renovatie en onderhoud van woningen en bedrijfspanden.
            </p>
            <div class="flex space-x-4 items-center mt-8 animate-fade-in animate-delay-700">
                <a href="{{ route('contact.index') }}" class="btn btn-brand">Neem contact op</a>
                <a href="{{ route('service.index') }}" class="btn btn-ghost flex items-center space-x-2">
                    <span>Bekijk diensten</span>
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                </a>
            </div>
        </div>
    </div>
    <div class="hidden lg:flex flex-col justify-center items-center h-full w-1/2 -mt-24">
        <div class="flex justify-center items-center max-w-xl mt-24 animate-fade-in-down rounded-xl shadow-xl">
            <img 
                src="{{ asset('images/hero.jpg') }}" 
                alt="Vos Bouw B.V." 
                class="object-cover w-full h-full rounded-xl z-10 bg-transparent"
            />
        </div>
    </div>
</div>