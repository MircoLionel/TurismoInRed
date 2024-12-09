<?php 
include 'conexion.php';

if (!empty($_POST['enviar'])) {
    if (empty($_POST['usuario'])and !empty($_POST['clave'])) {
        echo '<div class ="alert alert-danger">Los campos estan vacios</div>';
    } else{

    }

    
}





?>