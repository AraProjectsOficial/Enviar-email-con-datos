<x-app-layouts title="Envio de formulario">
    <div class="w-full bg-cyan-950 h-screen flex justify-center items-center">
        <div class="bg-white w-6/12 h-[450px] rounded-2xl p-[50px] ">
            <h1 class="text-3xl font-medium text-center mb-8">{{$issue}}</h1>
            <ol>
                <li class="list-disc text-lg font-semibold">Nombre: <span class="font-normal">{{$name}}</span></li>
                <li class="list-disc text-lg font-semibold">Número de empleado: <span
                        class="font-normal">{{$identifier}}</span></li>
                <li class="list-disc text-lg font-semibold">Área: <span class="font-normal">{{$area}}</span></li>
                <li class="list-disc text-lg font-semibold">Tema del correo: <span class="font-normal">{{$subject}}</span>
                </li>
            </ol>
            <h2 class="mt-8">Evidencias: </h2>
            <div class="flex flex-wrap gap-8 w-full justify-center mt-4">
                @foreach ($imgs as $item)
                @php
                    $ruta = str_replace('public/imagenes/', '', $item);
                @endphp
                    {{-- <img src="{{asset('storage/imagenes/' . $ruta)}}" alt="..." class="w-4/12"> --}}
                    {{$ruta}}
                @endforeach
            </div>
        </div>
    </div>
</x-app-layouts>