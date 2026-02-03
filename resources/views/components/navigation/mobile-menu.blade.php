
<div 
    x-cloak
    x-show="mobile" 
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 -translate-y-10"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-10"
    class="lg:hidden flex text-white h-screen px-8 py-8"
>
    <div class="flex flex-col w-full">
            <div class="-my-6 divide-y divide-gray-500/10 dark:divide-white/10">
                <div class="space-y-2 py-6">
                    <a x-on:click="mobile = false" href="{{ route('home') }}" class="-mx-3 block rounded-lg px-3 py-2 text-lg/7 font-normal text-navbar-foreground hover:bg-navbar-muted">Home</a>
                    <a x-on:click="mobile = false" href="{{ route('project.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-lg/7 font-normal text-navbar-foreground hover:bg-navbar-muted">Projecten</a>
                    <a x-on:click="mobile = false" href="{{ route('service.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-lg/7 font-normal text-navbar-foreground hover:bg-navbar-muted">Diensten</a>
                    <a x-on:click="mobile = false" href="{{ route('contact.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-lg/7 font-normal text-navbar-foreground hover:bg-navbar-muted">Contact</a>                
                </div>
                <div class="py-6">
                    <x-inputs.button variant="primary" label="Neem contact op" class="w-full text-lg" />
                </div>
            </div>
        </div>
    </div>
</div>
