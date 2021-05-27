<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de habilidades</title>
</head>
<body>
<h1>Listado de personas</h1>
<a href="{{ route('habilidades.create') }}" > Nuevo </a>

<table border="1">
<thead>
<tr>
<th>Nombres</th>
<th>Porcentaje</th>
<th>Nivel</th>
</tr>
</thead>
<tbody>
@foreach ($habilidades as $habilidad)
<tr>
<td>{{$habilidad->nombres}}</td>
<td>{{$habilidad->porcentajes}}</td>
<td>{{$habilidad->orden}}</td>

<td>
<a href="{{ route('habilidades.edit',$habilidad->id) }}">Editar</a>
<a href="#">Enviar</a>

</td>

</tr>

    
@endforeach
</tbody>
</table>
    
</body>
</html>