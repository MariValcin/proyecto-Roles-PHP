<?php

include('conection.php');

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];/*pedido de formulario login*/
session_start();
$_SESSION['correo'] = $correo;//Globalizacion de la variable

//consulta
$consulta = "SELECT*FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena'";
//validacion de datos
$validacion = mysqli_query($conexion,$consulta);
//guardado de array
$tuplas = mysqli_fetch_array($validacion);
//validacion de usuarios segun su rol en la pagina

//Usuario Administracion
if (isset($tuplas['id_rol'])==3) {
    header('location:admin.php');
}
//Usuario Normal
elseif (isset($tuplas['id_rol'])==4) {
    header('location:index.php');
}
//Fallo del login (Datos incorrecto)
else{
    echo'los datos son incorrectos';
}
mysqli_free_result($validacion);
mysqli_close($conexion);

?>