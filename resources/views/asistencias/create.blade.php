<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion de Asistencias</title>
</head>
<body>
    <h2>Creacion de asistencias</h2>
    <form action="{{ route('asistencias.store')}}" method="post">
    @csrf
    <div>
    <label for="persona_id">Nombre *</label>
    <input type="text" name="persona_id" placeholder="Ingrese el nombre" required>
    </div>

    <div>
    <label for="fecha_ingreso">Fecha de Ingreso *</label>
    <input type="date" name="fecha_ingreso" placeholder="Ingrese la fecha de ingreso" required>
    </div>

    <div>
    <label for="fecha_salida">Fecha de salida *</label>
    <input type="date" name="fecha_salida" placeholder="Ingrese la fecha de salida" required>
    </div>

    <div>
    <button type="submit" > Guardar </button> 
    </div>

    </form>
</body>
</html>