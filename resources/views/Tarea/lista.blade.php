<h1 >Tareas</h1>
<table border ="1px">
    <thead>
    <tr>
        <th>NombreTarea</th>
        <th>comentarios_id</th>
        <th>proyectos_id</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($tareas as $tarea)
    <tr>
        <th>{{$tarea["NombreTarea"]}}</th>
        <th>{{$tarea["comentarios_id"]}}</th>
        <th>{{$tarea["proyectos_id"]}}</th>
    </tr>
        @endforeach
    </tbody>
</table>
