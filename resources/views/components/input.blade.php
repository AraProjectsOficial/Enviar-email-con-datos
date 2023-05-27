@props(['label', 'name', 'type', 'placeholder'=>''])

<label for="{{$name}}" class="font-semibold text-xl mb-3">{{$label}}</label>
<input type="{{$type}}" name="{{$name}}" {{$attributes->merge(['class' => 'shadow-lg mb-8 text-neutral-700 w-full appearance-none bg-white h-9 border border-gray-500 rounded-lg text-xl px-2 py-3'])}}>