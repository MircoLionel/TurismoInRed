<?php

if(!empty($_POST["modificarDoc"])) {
    if(!empty($_POST["nombreDocente"]) and !empty($_POST["apellidoDocentes"] and !empty($_POST["dniDoc"])) and !empty($_POST["FecDeNacDoc"]) and !empty($_POST["ColegioDocente"])){
        $idDocente=$_POST["id"];
        $nombreDocente=$_POST["nombreEDocente"];
        $apellidoDocentes=$_POST["apellidoEDocentes"];
        $dniDoc=$_POST["dniEDoc"];
        $FecDeNacDoc=$_POST["FecDeNacDocE"];
        $ColegioDocente=$_POST["ColegioEDocente"];
        $sql = $conexion->query("UPDATE docentes SET nombreDocente='$nombreDocente', apellidoDocentes='$apellidoDocentes', dniDoc='$dniDoc', FecDeNacDoc='$FecDeNacDoc', ColegioDocente='$ColegioDocente' WHERE idDocente ='$idDocente'");
        if (sql==1) {
            header("Location:'admin.php");
        } else {
            echo "Error al modificar los datos";
        }
    
    }else {
        echo "Todos los campos son obligatorios";
    }
    
}