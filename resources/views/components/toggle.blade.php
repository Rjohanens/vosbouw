<div x-data="{ on: false }" class="flex items-center space-x-2">
    @isset($label)
        <span for="{{ $name }}" class="block text-sm/6 font-normal text-gray-900">
            {{ $label }}
        </span>
    @endisset
    <button 
        @click="on = !on" 
        :aria-checked="on.toString()" 
        :class="on ? 'bg-primary' : 'bg-gray-200'" 
        type="button" 
        class="relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none" 
        role="switch"
    >
        <span 
            aria-hidden="true" 
            :class="on ? 'translate-x-5' : 'translate-x-0'" 
            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
        ></span>
    </button>
</div>