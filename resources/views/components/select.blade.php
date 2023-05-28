@props(['label', 'name'])

<label for="{{$name}}" class="font-semibold text-xl mb-3">{{$label}}</label>
<select name="{{$name}}" {{$attributes->merge(['class' => 'shadow-lg text-neutral-700 w-full appearance-none bg-white h-9 border border-gray-500 rounded-lg text-xl px-2'])}}>
    <option value="" disabled selected>Elije una opción</option>
    {{$slot}}
</select>
<p class="mb-8 font-semibold font-light text-red-500 mt-2">
    {{$errors->first($name);}}
</p>