@isset($href)
    <a href="{{ $href }}" {{ $attributes }} class="block rounded-md bg-primary px-3 py-2 text-sm font-normal text-white shadow-sm hover:bg-primary/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        <div class="flex space-x-2 items-center">
            <span>{{ $label }}</span>
            @isset($icon)
                @include('assets.icons.' . $icon)
            @endisset
        </div>
    </a>
@else
    <button {{ $attributes->whereStartsWith('wire') }} type="{{$type}}" {{ $attributes->merge(['class' => "rounded-md bg-primary px-3 py-2 text-sm font-normal text-white shadow-sm hover:bg-primary/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"]) }}>
        <div class="flex space-x-2 items-center">
            <span>{{ $label }}</span>
            @isset($icon)
                @include('assets.icons.' . $icon)
            @endisset
        </div>
    </button>
@endisset