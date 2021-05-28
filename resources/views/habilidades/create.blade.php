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
    <form action="{{ route('habilidades.store')}}" method="post">
    @csrf

    <div>
    <label for="nombres">Persona *</label>
    <select>
    @foreach ($personas as $persona)
    <option value = "{{$persona -> id}}"> {{$persona->nombres}} {{$persona->apellidos}} </option>
    @endforeach
    </select>

    </div>

    <div>
    <label for="nombres">Nombres *</label>
    <input type="text" name="nombres" placeholder="Ingrese su nombre" required>
    </div>

    <div>
    <label for="nombres">Porcentaje *</label>
    <input type="number" name="porcentajes" placeholder="Ingrese el porcentaje" required>
    </div>

    <div>
    <label for="orden">Orden *</label>
    <input type="number" name="orden" placeholder="Ingrese la orden" required>
    </div>
    
    <div>
    <button type="submit" > Guardar </button> 
    </div>

    </form>
</body>
</html>