<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de asistencia</title>
</head>
<body>
<h1>Listado de asistencia</h1>
<a href="{{ route('asistencias.create') }}" > Nuevo </a>

<table border="1">
<thead>
<tr>
<th>Nombres</th>
<th>Fecha de ingreso</th>
<th>Fecha de salida</th>
</tr>
</thead>
<tbody>
@foreach ($asistencias as $asistencia)
<tr>
<td>{{$asistencia->persona_id}}</td>
<td>{{$asistencia->fecha_ingreso}}</td>
<td>{{$asistencia->fecha_salida}}</td>

<td>
<a href="{{ route('asistencias.edit',$asistencia->id) }}">Editar</a>
<a href="#">Enviar</a>

</td>

</tr>

@endforeach
</tbody>
</table>
    
</body>
</html>