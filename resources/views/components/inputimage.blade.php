@props(['label', 'name'])

<label class="block">
    <label for="{{$name}}" class="font-semibold text-xl">{{$label}}</label>
    <input type="file" name="{{$name}}" accept="image/*" {{$attributes->merge(['class' => 'block w-full text-sm text-slate-500
    file:mr-4 file:py-2 file:px-4
    file:rounded-full file:border-0
    file:text-sm file:font-semibold
    file:bg-violet-50 file:text-violet-700
    hover:file:bg-violet-100
    mt-4'])}} />
</label>
<p class="mb-8 font-semibold font-light text-red-500 mt-2">
    {{$errors->first($name);}}
</p>