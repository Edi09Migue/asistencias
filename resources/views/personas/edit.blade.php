@extends('templates.main')
@section('title',' Editar personas')
@section('contenido')
    
    <h2>Crreacion de Personas</h2>
    <form action="{{ route('personas.update',$persona->id)}}" method="post">
    
    
    @csrf
    <input type="hidden" name ="_method" value="put">


    <div class="form-group">
    <label for="nombres">Nombre *</label>
    <input type="text" name="nombres" class="form-control" value="{{$persona->nombres}}" placeholder="Ingrese sus nombres" required>
    </div>

    <div class="form-group" >
    <label for="apellidos">Apellidos *</label>
    <input type="text" name="apellidos" class="form-control" value="{{$persona->apellidos}}" placeholder="Ingrese sus apellidos" required>
    </div>

    <div class="form-group">
    <label for="cedula">Cedula *</label>
    <input type="text" name="cedula" class="form-control form-control-lg" value="{{$persona->cedula}}" placeholder="Ingrese su cedula" required>
    </div>

    <div class="form-group">
    <label for="edad">Edad</label>
    <input type="number" name="edad" class="form-control" value="{{$persona->edad}}" placeholder="Ingrese su edad">
    </div>

    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control"  value="{{$persona->email}}" placeholder="Ingrese su email">
    </div>
    
    <div class="form-group">
    <button class="btn btn-outline-primary" type="submit" > Guardar </button> 
    <a class="btn btn-outline-primary" href="{{ route('personas.index') }}" > Atras </a>
    </div>

    </form>
    @endsection