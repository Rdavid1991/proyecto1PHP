<?php
include('header.php');
?>
<div class="d-flex justify-content-center align-items-center" style="height:40rem">
    <form action="crear_respuesta.php" method="post">
        <div class="card" style="width:33.3rem">
            <div class="card-header">
                <h2>Crear Encuesta</h2>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Encuesta</label>
                    <input type="text" class="form-control" name="titulo" placeholder="encuesta" required>
                </div>
                <div class="form-group">
                    <label for="">Numero de preguntas</label>
                    <input type="number" class="form-control" name="preguntas" placeholder="Pregunutas" min="0" max="5">
                </div>
                <div class="form-group d-flex justify-content-between">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="multiOption" value="1">
                        <label class="custom-control-label" for="customCheck1">Seleccion multiple</label>
                    </div>
                    <input type="submit" class="btn btn-primary" name="crear">
                </div>
            </div>
        </div>
    </form>
</div>

<?php include('footer.php') ?>