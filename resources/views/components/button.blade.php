<button type="button" {{ $attributes->merge(['class' => ' rounded-full w-fit px-4 py-3 text-sm font-medium border border-stone-500 shadow-sm hover:bg-orange-500 hover:border-orange-500 hover:text-white transition duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600'])}}>
    {{ $slot }}
</button>
