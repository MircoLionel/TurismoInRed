<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Rutas</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'funciones.php';
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="inscc">
        
        <form class="formm" method="post">
        <h1>Formulario Docente</h1>
                    <div class="form__group">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombreDoc" required>
                    </div>
                    <div class="form__group">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="apellidoDoc" required>
                    </div>
                    <div class="form__group">
                        <label for="dni" class="form-label">Documento nacional de identidad</label>
                        <input type="number" class="form-control" name="dniDoc" required>
                    </div>
                    <div class="form__group">
                        <label for="fecDeNac" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" name="fecDeNacDoc" required>
                    </div>
                    <div class="form__group">
                        <label for="nombreEscuela" class="form-label">Nombre de Escuela</label>
                        <input type="text" class="form-control" name="nombreEscuelaDoc" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="checkDoc">Enviar</button>
            
            
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>