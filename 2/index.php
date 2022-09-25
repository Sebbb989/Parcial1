<?php require_once "controllers/pokemon_controller.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Pokemones</title>
</head>
<body style="background-image: url('./img/fondo.jpg');background-size:cover;">
    <div class="container-sm text-center">
        <h1 style="color:white">Pokedex</h1>
        <div class="row">
            <table class="table table-danger table-striped table-hover table-bordered table-lg table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo 1</th>
                        <th scope="col">Tipo 2</th>
                        <th scope="col">Apariencia</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(pokemon_controller::mostrar() as $obj){ ?>
                        <tr>
                            <th scope="row"><?php echo $obj->getId() ?></th>
                            <td><?php echo $obj->getNombre() ?></td>
                            <td><?php echo $obj->getTipo1() ?></td>
                            <td><?php echo $obj->getTipo2() ?></td>
                            <td><img src="<?php echo $obj->getImg() ?>" class="img-fluid" alt="pokemon"></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>