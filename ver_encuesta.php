<?php
include('./class/class_lib.php');

include('header.php');

$cons = new Consulta();
$preg = $cons->listarEncuesta();

$cons = new Consulta();
$resp = $cons->listarRespuesta();
?>
<form action="insertar_votos.php" method="post">
    <div class="card">
        <div class="card-header">
            Tabla
        </div>
        <div class="card-body">


            <?php if ($preg != null) { ?>

                <?php foreach ($preg as $keyPreg) { ?>
                    <div class="card-header mt-3"><?php echo $keyPreg['titulo'] ?></div>
                    <table>
                        <?php if ($keyPreg['opcion'] == 1) { ?>
                            <?php foreach ($resp as $keyResp) { ?>
                                <?php if ($keyPreg['id'] == $keyResp['idenc']) { ?>
                                    <tr>
                                        <td><input type="checkbox" value="<?php echo $keyResp['id'] ?>" name="<?php echo $keyResp['idenc'] ?>"></td>
                                        <td><?php echo $keyResp['texto'] ?></td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        <?php } else { ?>
                            <?php foreach ($resp as $keyResp) { ?>
                                <?php if ($keyPreg['id'] == $keyResp['idenc']) { ?>
                                    <tr>
                                        <td><input type="radio" value="<?php echo $keyResp['id'] ?>" name="<?php echo $keyResp['idenc'] ?>"></td>
                                        <td><?php echo $keyResp['texto'] ?></td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    </table>
                <?php } ?>
                <div class="form-group">
                    <input type="submit" name="envenc" id="" class="btn btn-success">
                </div>
            <?php }else{ ?>
                <h3>No hay encuesta</h3>
            <?php }?>
        </div>
    </div>
</form>