<?php
include 'funciones.php';
$id=$_GET["id"];
$SQL=$conexion->query("SELECT*from docentes WHERE idDocente=$id");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="inscc">
        
        <form class="formm" method="POST">
        <h2 class="edit">Datos a Modificar</h2>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        include 'controlEdit.php';
        while($datosDoc=$SQL->fetch_object()) { ?>
                    <div class="form__group">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombreEDocente" value="<?=$datosDoc->nombreDocente?>" >
                    </div>
                    <div class="form__group">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="apellidoEDocentes" value="<?=$datosDoc->apellidoDocentes?>" >
                    </div>
                    <div class="form__group">
                        <label for="dni" class="form-label">Documento nacional de identidad</label>
                        <input type="number" class="form-control" name="dniEDoc" value="<?=$datosDoc->dniDoc?>" >
                    </div>
                    <div class="form__group">
                        <label for="fecDeNac" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" name="FecDeNacDocE" value="<?=$datosDoc->FecDeNacDoc?>" >
                    </div>
                    <div class="form__group">
                        <label for="nombreEscuela" class="form-label">Nombre de Escuela</label>
                        <input type="text" class="form-control" name="ColegioEDocente" value="<?=$datosDoc->ColegioDocente?>" >
                    </div>
                    <button type="submit" class="btn btn-primary" name="modificarEDoc">Modificar</button>
                <?php }

                ?>
            
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>