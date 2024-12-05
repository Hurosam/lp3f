<h1 >Comentarios</h1>
<table border ="1px">
    <thead>
    <tr>
        <th>NombreCom</th>
        <th>usuarios_id</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($comentarios as $comentario)
    <tr>
        <th>{{$comentario["NombreCom"]}}</th>
        <th>{{$comentario["usuarios_id"]}}</th>
    </tr>
        @endforeach
    </tbody>
</table>
