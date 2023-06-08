@props(['title'])

<div {{$attributes->merge(['class' => 'relative border-b border-t border-blue-500 bg-blue-100 px-4 py-3 text-blue-700'])}} role="alert" id="child">
    <button class="absolute top-0 right-0 mt-2 mr-2" onclick="eliminar()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
            <path d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
    <p class="font-bold">{{$title}}</p>
    <p class="text-sm">
        {{$slot}}
    </p>
</div>
