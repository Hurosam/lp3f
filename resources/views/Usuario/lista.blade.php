<h1 >usuarios</h1>
<table border ="1px">
    <thead>
    <tr>
        <th>nombre</th>
        <th>apellido</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($usuarios as $usuario)
    <tr>
        <th>{{$usuario["nombre"]}}</th>
        <th>{{$usuario["apellido"]}}</th>
    </tr>
        @endforeach
    </tbody>
</table>
