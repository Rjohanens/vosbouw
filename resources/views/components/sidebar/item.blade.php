<li>
    <a href="{{$to}}" 
        @class([
            'group flex items-center gap-x-3 rounded-md p-2 text-sm leading-6',
            'text-gray-700 hover:bg-gray-50 hover:text-orange-500' => !Str::contains(url()->current(), $to),
            'bg-gray-50 text-orange-500' => Str::contains(url()->current(), $to)
        ])
    >       
        @includeIf('assets.icons.'.$icon)
        {{$label}}
    </a>
</li>