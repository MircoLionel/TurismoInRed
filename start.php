<?php 


$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;

$conexion=mysqli_connect("localhost","root","","educativos");

$star = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$contraseña'";
$resque=mysqli_query($conexion, $star);

$filas=mysqli_num_rows($resque);

if ($filas>0) {
    header("location:usuarios.php");
} else {
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class ='error'>error</h1>
    <?php
}
mysqli_free_result($resque);
mysqli_close($conexion);

