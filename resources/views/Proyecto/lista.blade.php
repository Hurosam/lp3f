<h1 >Proyectos</h1>
<table border ="1px">
    <thead>
    <tr>
        <th>NombreProyecto</th>
        <th>usuarios_id</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($proyectos as $proyecto)
    <tr>
        <th>{{$proyecto["NombreProyecto"]}}</th>
        <th>{{$proyecto["usuarios_id"]}}</th>
    </tr>
        @endforeach
    </tbody>
</table>
