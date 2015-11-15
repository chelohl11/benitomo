<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Laravel 5.1</title>
</head>
<body>
	Esto esta muy bueno... gracias por su visita {{$nombre}}.

    @if($nombre!='')
        {{$nombre}}
    @else
         No existe
    @endif


</body>
</html>