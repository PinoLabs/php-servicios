<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de usuarios</title>
</head>
<body>
    <h3>Registro de usuarios</h3>
    <form action="agregar_usuario.php" method="POST">
        <input type="text" name="txtusuario" placeholder="Ingresa usuario">
        <input type="text" name="txtpsw" placeholder="Ingresa contraseña">
        <input type="text" name="txtpswv" placeholder="Nuevamente pass">
        <button type="submit">Guardar</button>
    </form>

    <h3>Iniciar Sesión</h3>
    <form action="login.php" method="POST">
        <input type="text" name="txtusuario" placeholder="Ingresa usuario">
        <input type="text" name="txtpsw" placeholder="Ingresa contraseña">
        <button type="submit">Guardar</button>
    </form>
    
</body>
</html>