<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion de Habilidades</title>
</head>
<body>
    <h2>Crreacion de Habilidades</h2>
    <form action="{{ route('habilidades.update',$habilidad->id)}}" method="post">
    
    
    @csrf
    <input type="hidden" name ="_method" value="put">


    <div>
    <label for="nombres">Nombres *</label>
    <input type="text" name="nombres" value="{{$habilidad->nombres}}" placeholder="Ingrese su nombre" required>
    </div>

    <div>
    <label for="porcentajes">porcentajes *</label>
    <input type="number" name="porcentajes" value="{{$habilidad->porcentajes}}" placeholder="Ingrese su porcentaje" required>
    </div>

    <div>
    <label for="orde">orden *</label>
    <input type="number" name="orden" value="{{$habilidad->orden}}" placeholder="Ingrese su orden" required>
    </div>

    <div>
    <button type="submit" > Guardar </button> 
    <a href="{{ route('habilidades.index') }}" > Atras </a>
    </div>

    </form>
</body>
</html>