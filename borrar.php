<?php

include('./class/class_lib.php');

include('header.php');


$cons = new Mantenimiento();
$cons->borrarPreguntas($_POST['id']);

$cons = new Mantenimiento();
$cons->borrarRespuestas($_POST['id']);

header("Location: mantenimiento.php");