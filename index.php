<?php
require_once 'entity/Cine.php';
require_once 'core/App.php';
require_once 'repository/CineRepository.php';
require_once 'database/Connection.php';

session_start();

$nom_Cine = '';
$dir_Cine = '';
$mun_Cine = '';
$_SESSION['id_cine']=null;

$_SESSION['id_peli']=null;
try {


    $config = require_once 'app/config.php';
    App::bind('config', $config);
    $connection = App::getConnection();
    $cineRepository = new CineRepository();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom_Cine = trim(htmlspecialchars($_POST['nom_Cine']));
        $dir_Cine = trim(htmlspecialchars($_POST['dir_Cine']));
        $mun_Cine = trim(htmlspecialchars($_POST['mun_Cine']));

        $cine = new Cine($nom_Cine,$dir_Cine,$mun_Cine);
        $cineRepository->save($cine);
    }

    $cines = $cineRepository->findAll();
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

    <title>CINES</title>
</head>
<body>

<div class="container">


    <br>
    <h4>AÑADIR CINES</h4>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label for="nom">Nombre Cine</label>
            <input type="text" class="form-control" id="nom" name="nom_Cine">
        </div>
            <div class="form-group">
            <label for="dir">Direcion Cine</label>
            <input type="text" class="form-control" id="dir" name="dir_Cine">
        </div>
        <div class="form-group">
            <label for="mun">Municipio Cine</label>
            <input type="text" class="form-control" id="mun" name="mun_Cine">
        </div>
        <button type="submit" class="btn btn-primary">Añadir</button>
    </form>

    <br>
    <br>
    <h4>TABLA PROVINCIAS</h4>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>id_Cine</th>
            <th>Nombre Cine</th>
            <th>Direcion Cine</th>
            <th>Municipio Cine</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($cines ?? [] as $cine) : ?>
            <tr onclick="window.location.href='sesion.php?v1=<?= $cine->getIdCine() ?>';">
                <th scope="row"><?= $cine->getIdCine() ?></th>
                <td><?= $cine->getNombreCine() ?></td>
                <td><?= $cine->getDirecionCine() ?></td>
                <td><?= $cine->getMunicipioCine() ?></td>
            </tr>
            </a>
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