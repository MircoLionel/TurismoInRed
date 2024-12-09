<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c1a42a0c3a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php include 'funciones.php';
    ?>
</head>

<body class="administracion">
    

    <div class="insccc">

    <form class="formmm" method="post">
        <h1>Formulario Administrador</h1>
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
    <div class="tabla">
        <div class="col-8 p-3">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Dni</th>
                    <th scope="col">Fecha de nac</th>
                    <th scope="col">Escuela</th>
                    <th scope="col"></th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                   include 'conexion.php';
                    $SQL=$conexion->query(" select * from  docentes ");   
                    while($datosDoc = $SQL->fetch_object()){ ?>
                  

                  <tr>
                      <td><?=$datosDoc->idDocente?></td>
                      <td><?=$datosDoc->nombreDocente?></td>
                      <td><?=$datosDoc->apellidoDocentes?></td>
                      <td><?=$datosDoc->dniDoc?></td>
                      <td><?=$datosDoc->FecDeNacDoc?></td>
                      <td><?=$datosDoc->ColegioDocente?></td>
                      <td>
                          <a href="edit.php?id=<?= $datosDoc->idDocente ?>"class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                          <a href=""class="btn btn-danger"><i class="fa-solid fa-xmark"></i></a>
                      </td>
                  </tr>
          


                <?php
                }
                  ?>
                 
                </tbody>
            </table>

        </div>
    </div>

</body>