<?php
require 'view/header.php';
require 'view/menu.php';



?>
<div class="container-fluid " id="contendorprincipal">
  
<?php echo $this->mensajeResultado ?>

<section class="vh-100" >
  <div class="container py-5 h-100 ">
    <div class="row d-flex align-items-center justify-content-center h-100 ">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://www.onoratoinformatica.it/wp-content/uploads/2019/02/password-manager.png"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 " style="border: 1px solid #A9E2F3; box-shadow: 5px 1px; ">

      <h3 class="mb-3" style=" text-align: center; color: blue;"> Login</h3>
        <form action="<?php echo constant('URL'); ?>login/autenticar" method="POST" class="m-3" >
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" name="email" placeholder="Email address here" class="form-control form-control-md" />
            <label class="form-label" for="form1Example13">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="password" name="password" placeholder="Password here" class="form-control form-control-md" />
            <label class="form-label" for="form1Example23">Password</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
            
          </div>
          
          <div   class="d-flex justify-content-center align-items-center ">
          <button  style="width:60% ;" type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
          </div>

          <!-- Submit button -->
          

          

        

        </form>
      </div>
    </div>
  </div>
</section>

    <!-- Pills content -->
</div>

<?php
require 'view/footer.php';
?>