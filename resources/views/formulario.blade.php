<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{ mix ('/css/app.css')}}">
    </head>
    <body>
        <form action="info" method="POST">
            @csrf
                <input type="text" name="nombre" id="nombre" placeholder="nombre">
                <input type="text" name="apellido_paterno" id="apellido_paterno" placeholder="apellido paterno">
                <input type="text" name="apellido_materno" id="apellido_materno" placeholder="apellido materno">
                <input type="submit" value="Enviar">
        </form>
        <main id="app">
        <example-component alumnos="{{ $datos }}"></example-component>
        </main>

        <script src="{{ mix ('/js/app.js')}}"></script>
    </body>
</html>