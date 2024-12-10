<?php 
include 'conexion.php';








if (isset($_POST['check1'])) {
    $nombreEscuela = trim($_POST['nombreEscuela']);
    
    $apellido = trim( $_POST['apellido']);
    $dni = trim($_POST['dni']);
    $fecDeNac = $_POST['fecDeNac'];
    $grado = trim($_POST['grado']);
    $turno = trim($_POST['turno']);
    $fecDeReg= date("Y-m-d");
    $reg = "INSERT alumno(nombre, apellido, dni, fecDeNac, curso, turno, fecDeReg) VALUES ('$nombre','$apellido','$dni','$fecDeNac','$grado','$turno','$fecDeReg')";
    $resultado = mysqli_query($conexion, $reg);
   if($resultado){
        ?>
        <h3 class ="ok">exito</h3>
        <?php
    } else {
        ?>
        <h3 class ="error">error</h3>
        <?php
    }      
}   


if (isset($_POST['check2'])) {
  
    $usu = trim($_POST['usuario']);
    $cla = trim($_POST['clave']);
    $cla =hash('sha512',$cla);
    $email = trim($_POST['email']);
    $nroLegajo =trim($_POST['nroLegajo']);
    $nombreUsu = trim($_POST['nombreUsu']);
    $apellidoUsu = trim( $_POST['apellidoUsu']);
    $registrar = "INSERT usuarios(usuario, clave, email, Nombre, Apellido, NroLegajo) VALUES ('$usu','$cla','$email','$nombreUsu','$apellidoUsu','$nroLegajo')";
    $verificarMail =mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");
   
    if (mysqli_num_rows($verificarMail) > 0){
        echo '<script>alert("El mail ya esta registrado");
                window.location ="SeccionEmp.php";
                </script>
                ';
    
        exit();
    }
    $verificarUsuario =mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usu'");
    if (mysqli_num_rows($verificarUsuario) > 0){
        echo '<script>alert("El usuario ya esta registrado");
                window.location ="SeccionEmp.php";
                </script>
                ';
    
        exit();
    }



    $resultado = mysqli_query($conexion, $registrar);
    if($resultado){
        echo '<script>alert("Usuario registrado exitosamente");
                window.location ="usuarios.php";
                </script>
                ';
    } else {
        echo "<h3 class ='error'>error</h3>";
    }
    mysqli_close($conexion);
}
if (isset($_POST['checkDoc'])) {
    $nombreEscuelaDoc = trim($_POST['nombreEscuelaDoc']);
    $nombreDoc = trim($_POST['nombreDoc']);
    $apellidoDoc = trim( $_POST['apellidoDoc']);
    $dniDoc = trim($_POST['dniDoc']);
    $fecDeNacDoc = $_POST['fecDeNacDoc'];
    $fecDeReg= date("Y-m-d");
    $regDoc = "INSERT docentes(nombreDocente, apellidoDocentes, ColegioDocente, dniDoc, fecDeNacDoc, fecDeRegDoc) VALUES ('$nombreDoc','$apellidoDoc','$nombreEscuelaDoc','$dniDoc','$fecDeNacDoc','$fecDeReg')";
    $resultadoDoc = mysqli_query($conexion, $regDoc);
   if($resultadoDoc){
        ?>
        echo '<div class="alert alert-success">Registro exitoso</div>';
        <?php
    } else {
        ?>
        echo '<div class="alert alert-danger">Error al registrar</div>';
        <?php
    }      
}



?>


