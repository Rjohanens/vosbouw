<div>
    <label for="comment" class="block text-sm/6 font-normal text-gray-900">
        {{ $label }}
    </label>
    <div class="mt-2">
      <textarea 
        {{$attributes->whereStartsWith('wire')}} 
        rows="4" 
        name="{{ $name}}" 
        @class([
            'block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-gray-500 sm:text-sm/6',
            'outline-red-500' => $errors->has($name),
            'outline-gray-300' => !$errors->has($name),
        ])
        ></textarea>
        @error($name)
          <p class="text-sm text-red-500 mt-1.5">{{ $message }}</p>
      @enderror
    </div>
  </div>