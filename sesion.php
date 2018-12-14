<?php
require_once 'entity/Sesion.php';
require_once 'entity/Pelicula.php';

require_once 'core/App.php';
require_once 'repository/SesionRepository.php';
require_once 'repository/PeliculaRepository.php';

require_once 'database/Connection.php';

session_start();

if (!isset($_SESSION['id_cine'])) {
    $_SESSION['id_cine'] =$_GET['v1'];
}

$hora_Sesion = '';
$dia_Sesion='';
$id_Pelicula='';
try {
    $config = require_once 'app/config.php';
    App::bind('config', $config);
    $connection = App::getConnection();
    $sesionRepository = new SesionRepository();
    $peliculasRepository = new PeliculaRepository();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $hora_Sesion = trim(htmlspecialchars($_POST['hora_Sesion']));
        $dia_Sesion = trim(htmlspecialchars($_POST['dia_Sesion']));
        $id_Pelicula=trim(htmlspecialchars($_POST['id_Pelicula']));

        $sesion=new Sesion($hora_Sesion,$dia_Sesion,$_SESSION['id_cine'],$id_Pelicula);
        $sesionRepository->save($sesion);
    }
    $peliculas = $peliculasRepository->findIds('id_Pelicula');
    $sesiones = $sesionRepository->findId($_SESSION['id_cine'], 'id_Cine');
} catch (QueryException $e) {
    throw new QueryException("Error");
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Sesion</title>
</head>
<body>
<div class="container">

    <br>
    <h4>AÑADIR SESION</h4>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label for="hora">Hora Sesion</label>
            <input type="text" class="form-control" id="hora" name="hora_Sesion">
        </div>
        <div class="form-group">
            <label for="dia">Dia Sesion</label>
            <input type="text" class="form-control" id="dia" name="dia_Sesion">
        </div>
        <div class="form-group">
            <label for="cine">Id Cine</label>
            <input class="form-control" type="text" placeholder="<?=  $_SESSION['id_cine'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="cod">Id Pelicula</label>

            <select id="cod" name="id_Pelicula" class="form-control">
                <?php foreach ($peliculas ?? [] as $p) : ?>
                    <option><?= $p->getIdPelicula()?></option>
                <?php endforeach; ?>

            </select>

        </div>
        <button type="submit" class="btn btn-primary">Añadir</button>
    </form>

    <br>
    <br>
    <h4>TABLA SESIONES</h4>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>id_Sesion</th>
            <th>Horas Sesion</th>
            <th>Dia Sesion</th>
            <th>id_Cine</th>
            <th>id_Pelicula</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($sesiones ?? [] as $sesion) : ?>
            <tr onclick="window.location.href='pelicula.php?v1=<?= $sesion->getIdPelicula() ?>';">
                <th scope="row"><?= $sesion->getIdSesion() ?></th>
                <td><?= $sesion->getHorasSesion() ?></td>
                <td><?= $sesion->getDiaSesion() ?></td>
                <td><?= $sesion->getIdCine() ?></td>
                <td><?= $sesion->getIdPelicula() ?></td>

            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>