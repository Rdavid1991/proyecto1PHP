<?php
if (array_key_exists('envenc', $_POST)) {
    include('./class/class_lib.php');

    foreach ($_POST as $key) {
        if (is_numeric($key)) {
            $con = new Consulta();

            echo $key;
            $voto = $con->consultarVoto($key);

            foreach ($voto as $v) {
                $nVoto = $v['votos'];
            }

            $nVoto += 1;

            echo $nVoto;
            $con = new Consulta();
            $con->guardarVoto($nVoto, $key);
        }
    }
}
