<?php 
    require 'view/header.php';
    require 'view/menu.php';

?>

<div  class="container-fluid" id="contendorprincipal">
            <h3><?php echo $this->mensaje;?></h3>

            <form  class="form-control" action="<?php echo constant('URL'); ?>usuarios/insertarUsuarios" method="POST">
                 <?php  require 'form.php' ?>
            </form>

</div>
<?php 
    require 'view/footer.php';

?>
