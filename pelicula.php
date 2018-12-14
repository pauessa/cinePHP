<?php
require_once 'entity/Pelicula.php';
require_once 'core/App.php';
require_once 'repository/PeliculaRepository.php';
require_once 'database/Connection.php';
session_start();

if (!isset($_SESSION['id_peli'])) {
    $_SESSION['id_peli'] = $_GET['v1'];
}

$titulo_Pelicula = '';
$director_Pelicula = '';
$interprete_Pelicula = '';
$categoria_Pelicula = '';
$duracion_Pelicula = '';
$sinopsis_Pelicula = '';
try {
    $config = require_once 'app/config.php';
    App::bind('config', $config);
    $connection = App::getConnection();
    $peliculasRepository = new PeliculaRepository();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $titulo_Pelicula = trim(htmlspecialchars($_POST['titulo_Pelicula']));
        $director_Pelicula = trim(htmlspecialchars($_POST['director_Pelicula']));
        $interprete_Pelicula = trim(htmlspecialchars($_POST['interprete_Pelicula']));
        $categoria_Pelicula = trim(htmlspecialchars($_POST['categoria_Pelicula']));
        $duracion_Pelicula = trim(htmlspecialchars($_POST['duracion_Pelicula']));
        $sinopsis_Pelicula = trim(htmlspecialchars($_POST['sinopsis_Pelicula']));

        $pelicula = new Pelicula($titulo_Pelicula,$director_Pelicula,$interprete_Pelicula,$categoria_Pelicula,$duracion_Pelicula,$sinopsis_Pelicula);
        $peliculasRepository->save($pelicula);
    }
    $peliculas = $peliculasRepository->findId($_SESSION['id_peli'], 'id_Pelicula');
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

    <title>Pelicula</title>
</head>
<body>
<div class="container">

    <br>
    <h4>AÑADIR PELICULA</h4>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label for="titulo">Titulo Pelicula</label>
            <input type="text" class="form-control" id="titulo" name="titulo_Pelicula">
        </div>
        <div class="form-group">
            <label for="dire">Director Pelicula</label>
            <input type="text" class="form-control" id="dire" name="director_Pelicula">
        </div>
        <div class="form-group">
            <label for="inte">Interprete Pelicula</label>
            <input type="text" class="form-control" id="inte" name="interprete_Pelicula">
        </div>
        <div class="form-group">
            <label for="cat">Categoria Pelicula</label>
            <input type="text" class="form-control" id="cat" name="categoria_Pelicula">
        </div>
        <div class="form-group">
            <label for="dura">Duracion Pelicula</label>
            <input type="text" class="form-control" id="dura" name="duracion_Pelicula">
        </div>
        <div class="form-group">
            <label for="sino">Sinopsis Pelicula</label>
            <input type="text" class="form-control" id="sino" name="sinopsis_Pelicula">
        </div>



        <button type="submit" class="btn btn-primary">Añadir</button>
    </form>

    <br>
    <br>
    <h4>TABLA PELICULAS</h4>
    <table class="table">
        <thead class="thead-dark">
        <tr>


            <th>id_Pelicula</th>
            <th>titulo_Pelicula</th>
            <th>director_Pelicula</th>
            <th>interprete_Pelicula</th>
            <th>categoria_Pelicula</th>
            <th>duracion_Pelicula</th>
            <th>sinopsis_Pelicula</th>

        </tr>
        </thead>
        <tbody>

        <?php foreach ($peliculas ?? [] as $p) : ?>
            <tr>
                <th scope="row"><?= $p->getIdPelicula() ?></th>
                <td><?= $p->getTituloPelicula() ?></td>
                <td><?= $p->getDirectorPelicula() ?></td>
                <td><?= $p->getInterpretePelicula() ?></td>
                <td><?= $p->getCategoriaPelicula() ?></td>
                <td><?= $p->getDuracionPelicula() ?></td>
                <td><?= $p->getSinopsisPelicula() ?></td>

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