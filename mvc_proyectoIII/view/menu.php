<?php
$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$ses = session_status();



?>

<nav class="navbar navbar-expand-sm navbar-light bg-info" >
  <div class="container">
    <a class="navbar-brand" href="<?php echo constant('URL'); ?>main">JB Page</a>
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
      aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav me-auto mt-2 mt-lg-0">

        <li class="nav-item">
          <a class="nav-link"  href="<?php echo constant('URL'); ?>main">Home</a>
        </li>


        <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true"
            aria-expanded="false">Grupos</a>
          <div class="dropdown-menu" style="background-color: #ECCEFE">
            <a class="dropdown-item" href="<?php echo constant('URL'); ?>grupos">Consulta</a>
            <a class="dropdown-item" href="<?php echo constant('URL'); ?>grupos/crear">Crear</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#tab4Id">Action</a>
          </div>
        </li>

        <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true"
            aria-expanded="false">Cursos</a>
          <div class="dropdown-menu" style="background-color: #ECCEFE">
            <a class="dropdown-item" href="<?php echo constant('URL'); ?>cursos">Consulta</a>
            <a class="dropdown-item" href="<?php echo constant('URL'); ?>cursos/crear">Crear</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#tab4Id">Action</a>
          </div>
        </li>

        
        <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true"
            aria-expanded="false">Estudiantes</a>
          <div class="dropdown-menu" style="background-color: #ECCEFE">
            <a class="dropdown-item" href="<?php echo constant('URL'); ?>estudiantes">Consulta</a>
            <a class="dropdown-item" href="<?php echo constant('URL'); ?>estudiantes/crear">Crear</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#tab4Id">Action</a>
          </div>
        </li>

        <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true"
            aria-expanded="false">Profesores</a>
          <div class="dropdown-menu" style="background-color: #ECCEFE">
            <a class="dropdown-item" href="<?php echo constant('URL'); ?>profesores">Consulta</a>
            <a class="dropdown-item" href="<?php echo constant('URL'); ?>profesores/crear">Crear</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#tab4Id">Action</a>
          </div>
        </li>

      </ul>

      


    </div>

  </div>


</nav>