<h1>Crear nuevo alumno</h1>
<form action="{{route('alumnos.store')}}" method="POST">
  @csrf
  <input type="text" name="nombre" placeholder="Nombre" value="{{old('nombre')}}">
  @error('nombre')
    <p style="color: red">{{$message}}</p>
  @enderror
  <br><br>
  <input type="text" name="apellido_paterno" placeholder="Apellido paterno" value="{{old('apellido_paterno')}}">
  @error('apellido_paterno')
    <p style="color: red">{{$message}}</p>
  @enderror<br><br>
  <input type="text" name="apellido_materno" placeholder="Apellido materno"value="{{old('apellido_materno')}}">
  @error('apellido_materno')
    <p style="color: red">{{$message}}</p>
  @enderror<br><br>
  <input type="text" name="matricula" placeholder="Matrícula" value="{{old('matricula')}}">
  @error('matricula')
    <p style="color: red">{{$message}}</p>
  @enderror<br><br>
  <button type="submit">Guardar</button>
</form>