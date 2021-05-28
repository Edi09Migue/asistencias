<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Listado de personas <span class="badge"> {{personas.leght}}</span></div>

                    <div class="card-body">
                        
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
<tr vfor="persona in personas" :key="persona:nombres">
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

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
