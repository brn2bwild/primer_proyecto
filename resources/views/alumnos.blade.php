<h1>hola desde alumnos</h1>

<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Apellido paterno</td>
            <td>Apellido materno</td>
            <td>Matricula</td>
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
            </tr>
        @endforeach
    </tbody>
</table>