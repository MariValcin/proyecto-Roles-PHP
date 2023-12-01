<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta html-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <header>
        <h1>
            ACCESO
        </h1>
    </header>

    <div class="formulario">

    <form action="validacion.php" method="post">

    <h2>Acceso</h2>
    <br>
    <label for="">Correo</label>
    <br>
    <input type="email" name="correo">
    <br><br>
    <label for="">Contraseña</label>
    <br>
    <input type="password" name= "contrasena">
    <br><br>
    <button>Ingresar</button>

    </form>

    </div>
</body>
</html>