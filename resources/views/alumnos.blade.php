@extends('layout')

@section('titulo', 'Alumnos')

@section('contenido')
  <a href="{{route('alumnos.create')}}">Crear alumno</a>
  <table id="tablaAlumnos">
      <thead class="table-dark">
          <tr>
              <td>ID</td>
              <td>Nombre</td>
              <td>Apellido paterno</td>
              <td>Apellido materno</td>
              <td>Matricula</td>
              <td>Acciones</td>
          </tr>
      </thead>
      <tbody>
          @foreach ($alumnos as $alumno)
              <tr>
                  <td>{{$alumno->id}}</td>
                  <td>{{$alumno->nombre}}</td>
                  <td>{{$alumno->apellido_paterno}}</td>
                  <td>{{$alumno->apellido_materno}}</td>
                  <td>{{$alumno->matricula}}</td>
                  <td>
                    <a href="{{route('alumnos.edit', $alumno->id)}}" class="btn btn-info">Editar</a>
                    <form action="{{route('alumnos.destroy', $alumno->id)}}" style="display: inline" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="" id="" value="Eliminar" class="btn btn-danger">
                    </form>
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>

  <script>
    $(document).ready( function () {
        $('#tablaAlumnos').DataTable({
          "language": {
            "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "No se encontró ningún registro",
            "Previous": "Anterior",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }
      });
    } );
  </script>
@endsection

