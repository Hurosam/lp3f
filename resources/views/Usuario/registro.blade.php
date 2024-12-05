<form method="post"action="/Registro/Usuarios">
    @csrf
    <input type="text" name ="nombre" placeholder="ingrece nombre">
    <input type="text" name ="apellido" placeholder="apellido">
    <input type="submit">

</form>