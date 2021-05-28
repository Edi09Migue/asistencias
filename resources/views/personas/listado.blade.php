@extends('templates.main')
@section('title','Listado de personas')
@section('contenido')
<h1>Listado de personas</h1>



<a href="{{ route('personas.create') }}" > Nuevo </a>

<table class="table table-dark table-bordered table-striped">
<thead>
<tr>
<th>#</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Cedula</th>
<th>Email</th>
<th>Habilidades</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
@foreach ($personas as $persona)
<tr class="@if($loop->first) table-danger @endif">
<td>{{$loop->iteration}}</td>
<td>{{$persona->nombres}}</td>
<td>{{$persona->apellidos}}</td>
<td>{{$persona->cedula}}</td>
<td>{{$persona->edad}}</td>
<td>{{$persona->email}}</td>
<td>0</td>

<td>
<a class="btn btn-outline-primary" href="{{ route('personas.edit',$persona->id) }}">Editar</a>
<form action="{{ route('personas.destroy',$persona->id)}}" method="post">

@csrf
@method('delete')
<button class="btn btn-outline-danger" type="submit">Eliminar</a>
</form>
</td>

</tr>    
@endforeach
</tbody>
</table>

@endsection