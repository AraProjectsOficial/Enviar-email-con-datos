@props(['message'])
<button type="submit" {{$attributes->merge(['class' => 'bg-black px-3 py-2 text-white font-semibold rounded-xl mt-8'])}}>{{$message}}</button>