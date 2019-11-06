<?php
if (array_key_exists('envenc', $_POST)) {
    include('./class/class_lib.php');

    foreach ($_POST as $key) {
        if (is_numeric($key)) {
            $con = new Consulta();

            $voto = $con->consultarVoto($key);

            foreach ($voto as $v) {
                $nVoto = $v['votos'];
            }

            $nVoto += 1;

            $con = new Consulta();
            $con->guardarVoto($nVoto, $key);
        }
    }
}

include('header.php')
?>

<div class="d-flex justify-content-center align-items-center" style="height: 40rem;">
    <div class="form text-center">
        <div class="form-group">
            <h1>Encuesta realizada con exito</h1>
        </div>
        <div class="form-group">
            <a href="/Proyecto_1" class="btn btn-success">Ir a Home</a>
        </div>
    </div>
</div>