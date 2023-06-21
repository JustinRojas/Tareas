<?php
require 'view/header.php';
require 'view/menu.php';

?>

<div class="container-fluid row" id="contendorprincipal">
    <!-- el sms que se pasa en el método crear del controller estudiantes -->
    <h3>
        <?php echo $this->mensaje; ?>
        <a style="float:right; " name="" id="" class="btn btn-primary btn-sm mt-2"
            href="<?php echo constant('URL'); ?>estudiantes" role="button">Volver al principal</a>
    </h3>


    <!-- Acá se envuelve los inputs creador en form.php dentro de un form para así darle la acción el tipo de método -->
    <form class="form-control mt-2" action="<?php echo constant('URL'); ?>estudiantes/insertarEstudiante" method="POST">
        <?php require 'form.php'; ?>
    </form>

</div>


<?php
require 'view/footer.php';
?>