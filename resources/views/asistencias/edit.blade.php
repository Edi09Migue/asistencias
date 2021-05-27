<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion de Asistencias</title>
</head>
<body>
    <h2>Crreacion de Asistencias</h2>
    <form action="{{ route('asistencias.update',$asistencia->id)}}" method="post">
    
    
    @csrf
    <input type="hidden" name ="_method" value="put">


    <div>
    <label for="persona_id">Nombre *</label>
    <input type="text" name="persona_id" value="{{$asistencia->persona_id}}" placeholder="Ingrese el nombre" required>
    </div>

    <div>
    <label for="fecha_ingreso">Apellidos *</label>
    <input type="text" name="fecha_ingreso" value="{{$asistencia->fecha_ingreso}}" placeholder="Ingrese la fecha de ingreso" required>
    </div>

    <div>
    <label for="fecha_salida">Cedula *</label>
    <input type="text" name="fecha_salida" value="{{$asistencia->fecha_salida}}" placeholder="Ingrese la fecha de salida" required>
    </div>


    <div>
    <button type="submit" > Guardar </button> 
    <a href="{{ route('asistencias.index') }}" > Atras </a>
    </div>

    </form>
</body>
</html>