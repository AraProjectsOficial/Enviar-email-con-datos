<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviar email</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black flex flex-col items-center">
    <h1 class="text-3xl text-white font-semibold text-center my-8 font-mono">Formulario de datos</h1>
    <div class="flex justify-center bg-white w-5/12 rounded-2xl shadow-2xl shadow-[#000CFF] p-[50px]">
        <form action="" class="flex flex-col w-full">
            <x-input label="Nombre:" name="name" type="text" placeholder="Nombre del destinatario" />
            <x-input label="Número de socio:" name="identifier" type="number" placeholder="Ingresa el identificador unico del trabajador" />
            
            <x-select label="Área: " name="area">
                <option value="1">Maquila</option>
                <option value="2">Enbarque</option>
                <option value="3">Sistemas</option>
                <option value="4">Producción</option>
                <option value="5">Vigilancia</option>
            </x-select>

            <x-select label="Tema: " name="subject">
                <option value="">Falta</option>
                <option value="">Asuencias consecutivas</option>
                <option value="">Solicitar información</option>
                <option value="">Promoción</option>
                <option value="">Junta</option>
                <option value="">Día festivo</option>
                <option value="">Cumpleaños</option>
            </x-select>

            <x-input label="Asunto: " name="issue" type="text" placeholder="Ingresa el asunto del correo electrónico"/>

            <x-inputimage label="Imagenes referentes: " name="images" />

            <div class="flex justify-center">
                <x-btn message="Enviar" />
            </div>
        </form>
    </div>
</body>
</html>