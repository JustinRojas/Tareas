<?php 
    require 'view/header.php';
    require 'view/menu.php';

?>

<div  class="container-fluid" id="contendorprincipal">
<h1><?php echo $this->mensaje;?>
    <a style="float:right; " name="" id="" class="btn btn-primary mt-2" href="<?php echo constant('URL'); ?>usuarios" role="button">Volver a la lista</a>
</h1>
            <?php echo $this->mensajeResultado ?>

            <form  class="form-control" action="<?php echo constant('URL'); ?>usuarios/actualizarUsuario" method="POST">
                 <?php  require 'form.php' ?>
            </form>

</div>
<?php 
    require 'view/footer.php';

?>
