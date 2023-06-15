<?php
require 'view/header.php';
require 'view/menu.php';

?>

<div class="container-fluid row" id="contendorprincipal">
<!-- el sms que se pasa en el método crear del controller estudiantes -->
<h1><?php echo $this->mensaje;?></h1> 

<!-- Acá se envuelve los inputs creador en form.php dentro de un form para así darle la acción el tipo de método -->
<form class="form-control" action="<?php echo constant('URL'); ?>estudiantes/insertarEstudiante" method="POST">
        <?php require 'form.php'; ?>
    </form>

</div>


<?php
require 'view/footer.php';
?>