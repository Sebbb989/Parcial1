<?php 

require_once "controllers/estudiantes_controller.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Parcial1.1</title>
</head>
<body>
    <div class="container-sm text-center">
        <h1>Estudiantes del Curso</h1>
        <div class="row">
            <table class="table table-light table-striped table-hover table-bordered table-md table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Clasificacion</th>
                        <th scope="col">Nota</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(estudiantes_controller::mostrar() as $obj){ ?>
                    <tr class="<?php echo $obj->getColor(); ?>">
                        <th scope="row"><?php  echo $obj->getId(); ?></th>
                        <td><?php echo $obj->getNombre(); ?></td>
                        <td><?php echo $obj->getApellido(); ?></td>
                        <td><?php echo $obj->getClasificaciones(); ?></td>
                        <td><?php echo $obj->getNota(); ?></td>
                        <td><!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $obj->getId() ?>">
                            <i class="bi bi-info-circle"></i> Informacion del Estudiante
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?php echo $obj->getId(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Informacion de <?php echo $obj->getNombre()." ".$obj->getApellido() ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Su Clasificacion fue de: <?php echo $obj->getClasificaciones(); ?>
                                            <br>
                                            Por lo cual su nota obtenida es: <?php echo $obj->getNota(); ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>