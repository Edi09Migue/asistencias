<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de personas</title>
</head>
<body>
<h1>Listado de personas</h1>
<a href="{{ route('personas.create') }}" > Nuevo </a>

<table border="1">
<thead>
<tr>
<th>Nombres</th>
<th>Apellidos</th>
<th>Cedula</th>
<th>Email</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
@foreach ($personas as $persona)
<tr>
<td>{{$persona->nombres}}</td>
<td>{{$persona->apellidos}}</td>
<td>{{$persona->cedula}}</td>
<td>{{$persona->edad}}</td>
<td>{{$persona->email}}</td>

<td>
<a href="{{ route('personas.edit',$persona->id) }}">Editar</a>
<a href="#">Enviar</a>

</td>

</tr>

    
@endforeach
</tbody>
</table>
    
</body>
</html>