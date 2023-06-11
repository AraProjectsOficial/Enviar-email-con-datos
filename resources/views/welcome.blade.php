<x-app-layouts title='Formulario'>
    <h1 class="text-3xl text-white font-semibold text-center my-8 font-mono">Formulario de datos</h1>
    <div class="flex justify-center bg-white w-5/12 rounded-2xl shadow-2xl shadow-[#000CFF] p-[50px]" >
        <form method="POST" action="{{route('sendEmail')}}" class="flex flex-col w-full" enctype="multipart/form-data">
            @csrf
            <x-input label="Nombre:" name="name" type="text" placeholder="Nombre del destinatario" value="{{ old('name') }}" />
    
            <x-input label="Número de socio:" name="identifier" type="number" placeholder="Ingresa el identificador unico del trabajador" value="{{old('identifier')}}" />
            <x-select label="Área: " name="area">
                <option value="Maquila" {{ old('area') == 'Maquila' ? 'selected' : '' }} >Maquila</option>
                <option value="Embarque" {{ old('area') == 'Embarque' ? 'selected' : '' }} >Enbarque</option>
                <option value="Sistemas" {{ old('area') == 'Sistemas' ? 'selected' : '' }} >Sistemas</option>
                <option value="Producción" {{ old('area') == 'Producción' ? 'selected' : '' }} >Producción</option>
                <option value="Vigilancia" {{ old('area') == 'Vigilancia' ? 'selected' : '' }} >Vigilancia</option>
            </x-select>
            <x-select label="Tema: " name="subject">
                <option value="Falta" {{ old('subject') == 'Falta' ? 'selected' : '' }} >Falta</option>
                <option value="Ausencias" {{ old('subject') == 'Ausencias' ? 'selected' : '' }} >Asuencias consecutivas</option>
                <option value="Información" {{ old('subject') == 'Información' ? 'selected' : '' }} >Solicitar información</option>
                <option value="Promoción" {{ old('subject') == 'Promoción' ? 'selected' : '' }} >Promoción</option>
                <option value="Junta" {{ old('subject') == 'Junta' ? 'selected' : '' }} >Junta</option>
                <option value="Festivo" {{ old('subject') == 'Festivo' ? 'selected' : '' }} >Día festivo</option>
                <option value="Cumpleaños" {{ old('subject') == 'Cumpleaños' ? 'selected' : '' }} >Cumpleaños</option>
            </x-select>
            <x-input label="Asunto: " name="issue" type="text" placeholder="Ingresa el asunto del correo electrónico"/>
            <x-inputimage label="Imagenes referentes:" name="images[]" multiple />
            <div class="flex justify-center">
                <x-btn message="Enviar" />
            </div>
        </form>
    </div>
    @if (session('alert'))    
        <div class="fixed bottom-0 right-0 p-4 w-3/12" id="father">
            <x-alertsuccess title="Esto es una prueba">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum saepe, quae facere dolor sit dicta
                mollitia quam laborum.
            </x-alertsuccess>
        </div>    
    @endif
    @if (session('mensaje'))
        <p>{{session('mensaje')}}</p>
    @endif
</x-app-layouts>