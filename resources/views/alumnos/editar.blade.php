<h1>vista editar</h1>

<form action="{{route('alumnos.update', $alumno)}}" method="POST">
  @method('PATCH')
  @csrf
  <input type="text" name="nombre" placeholder="Nombre" value="{{$alumno->nombre}}">
  @error('nombre')
    <p style="color: red">{{$message}}</p>
  @enderror<br><br>
  <input type="text" name="apellido_paterno" placeholder="Apellido paterno" value="{{$alumno->apellido_paterno}}">
  @error('apellido_paterno')
    <p style="color: red">{{$message}}</p>
  @enderror<br><br>
  <input type="text" name="apellido_materno" placeholder="Apellido materno" value="{{$alumno->apellido_materno}}">
  @error('apellido_materno')
    <p style="color: red">{{$message}}</p>
  @enderror<br><br>
  <input type="text" name="matricula" placeholder="Matrícula" value="{{$alumno->matricula}}">
  @error('matricula')
    <p style="color: red">{{$message}}</p>
  @enderror<br><br>
  @if ($alumno->rol == 'admin')    
    <button type="submit">Guardar</button>
    <h2>este usuario tiene el rol alumno</h2>
  @endif
  @foreach ($alumno->calificaciones  as $calificacion)
      <h1>{{$calificacion->materia}}</h1>
      <h1>{{$calificacion->calificacion}}</h1>
      <h1>{{$calificacion->alumno->matricula}}</h1>
  @endforeach
</form>