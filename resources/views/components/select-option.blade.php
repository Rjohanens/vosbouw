<li x-on:click="open = false" {{ $attributes }} class="relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900 hover:bg-zinc-100" id="listbox-option-0" role="option">
    <span class="block truncate font-normal capitalize">
        {{ $label }}
    </span>

    @if($selected)
        <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-primary">
            @includeIf('assets.icons.check')
        </span>
    @endif
</li>