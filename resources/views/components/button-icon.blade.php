<button {{ $attributes->whereStartsWith('wire') }} type="button" class="rounded-md bg-primary p-2 text-sm font-normal text-white shadow-sm focus-visible:outline">
    <div class="flex justify-centers items-center">
        @includeIf('assets.icons.' . $icon)
    </div>
</button>