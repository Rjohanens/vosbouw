<div>
    <label for="email" class="block text-sm/6 font-normal text-gray-900">
    {{ $label}}
    </label>
    <div class="mt-2">
        <input 
            type="{{ $type }}" 
            name="{{ $name }}"
            id="{{ $name }}"
            placeholder="{{ $placeholder }}"
            value="{{ $value }}"
            {{ $attributes->whereStartsWith('wire') }}
            @if($required) required @endif
            @class([
                'block w-full rounded-md bg-white px-4 py-3 text-base text-gray-900 outline outline-1 -outline-offset-1 placeholder:text-gray-400 placeholder:font-light text-sm focus:outline focus:outline-1 focus:-outline-offset-2 focus:outline-gray-500 ',
                'outline-red-500' => $errors->has($name),
                'outline-gray-300' => !$errors->has($name),
            ])
        />
        @error($name)
            <p class="text-sm text-red-500 mt-1.5">{{ $message }}</p>
        @enderror
    </div>
  </div>