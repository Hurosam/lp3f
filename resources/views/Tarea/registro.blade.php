<form method="post"action="/Registro/Tareas">
    @csrf
    <input type="text" name ="NombreTarea" placeholder="ingrece NombreTarea">
    <input type="number" name ="comentarios_id" placeholder="comentarios_id">
    <input type="number" name ="proyectos_id" placeholder="proyectos_id">
    <input type="submit">

</form>