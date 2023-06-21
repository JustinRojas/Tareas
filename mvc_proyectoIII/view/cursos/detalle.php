<?php
require 'view/header.php';
require 'view/menu.php';
?>
<div class="container-fluid" id="contendorprincipal">
    <h3>
        <?php echo $this->mensaje; ?>
        <a style="float:right; " name="" id="" class="btn btn-primary btn-sm mt-2"
            href="<?php echo constant('URL'); ?>cursos" role="button">Volver al principal</a>
    </h3>
    <div>
        <?php echo $this->mensajeResultado; ?>
    </div>
    <form class="form-control mt-3 "  style="padding-bottom:2%;" action="<?php echo constant('URL'); ?>cursos/actualizarcurso" method="POST">
        <?php require 'form.php'; ?>
    </form>
</div>
<?php
require 'view/footer.php';
?>