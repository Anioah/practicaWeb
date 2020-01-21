<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista Prueba</title>

    <style>
    .Masculino{
        background-color:blue;
        color:white;
    }

    .Femenino{
        background-color:pink;
    }
    </style>
</head>
    <body>

        @if($edad >= 18)
            @if($sexo == "Femenino") 
                <h1 style="color: pink;">Hola, Bienvenida {{ $nombre }}</h1>
            @else
                <h1 style="color: blue;">Hola, Bienvenido {{ $nombre }}</h1>
            @endif
        @else
            <h1>No eres Bienvenid@</h1>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apeliido P</th>
                    <th>Apellido M</th>    
                    <th>Sexo</th>
                    <th>Edad</th>
                </tr>
            </thead>

                @foreach($datos as $dato)
                    @if($dato["sexo"] == "Masculino")
                        <tr style="background:blue">
                                <td style="color:white">{{$dato["nombre"]}}</td>
                                <td style="color:white">{{$dato["ap_paterno"]}}</td>
                                <td style="color:white">{{$dato["ap_materno"]}}</td>
                                <td style="color:white">{{$dato["sexo"]}}</td>
                            @if($dato["edad"] >= 18)
                                <td style="color:white">{{$dato["edad"]}} &#10003; </td>
                            @else
                                <td style="color:white">{{$dato["edad"]}} x </td>
                            @endif 
                        </tr>

                    @else
                        <tr style="background:pink">
                                <td>{{$dato["nombre"]}}</td>
                                <td>{{$dato["ap_paterno"]}}</td>
                                <td>{{$dato["ap_materno"]}}</td>
                                <td>{{$dato["sexo"]}}</td>
                            @if($dato["edad"] >= 18)
                                <td>{{$dato["edad"]}} &#10003; </td>
                            @else
                                <td>{{$dato["edad"]}} x </td>
                            @endif 
                        </tr>
                    @endif
                @endforeach
        </table>

        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apeliido P</th>
                    <th>Apellido M</th>    
                    <th>Sexo</th>
                    <th>Edad</th>
                </tr>
            </thead>

            @foreach($datos as $dato)
                <tr class="{{$dato['sexo']}}">
                    <td>{{$dato["nombre"]}}</td>
                    <td>{{$dato["ap_paterno"]}}</td>
                    <td>{{$dato["ap_materno"]}}</td>
                    <td>{{$dato["sexo"]}}</td>
                    <td>{{$dato["edad"]}}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>