@props(['label', 'name'])

<label for="{{$name}}" class="font-semibold text-xl mb-3">{{$label}}</label>
<select name="{{$name}}" {{$attributes->merge(['class' => 'shadow-lg mb-8 text-neutral-700 w-full appearance-none bg-white h-9 border border-gray-500 rounded-lg text-xl px-2'])}}>
    <option value="" disabled selected>Elije una opción</option>
    {{$slot}}
</select>