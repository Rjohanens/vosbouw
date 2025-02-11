<button type="{{$type}}" {{ $attributes->whereStartsWith('wire') }} class="rounded-md bg-white px-3 py-2 text-sm font-normal text-zinc-700 hover:bg-zinc-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-200">
    <div class="flex space-x-2 items-center">
         <span>{{ $label }}</span>
         @isset($icon)
             @include('assets.icons.' . $icon)
         @endisset
     </div>
 </button>