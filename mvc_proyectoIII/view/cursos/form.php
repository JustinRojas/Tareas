<!-- <div style="max-width:50%; margin:auto; padding:auto;" class="">


</div> -->

<div style="max-width:50%; margin:auto; padding:auto; background-color: #EBD9F6;" class="mt-3">
  <div class="p-3">
    <div class="mb-3" <?php echo isset($this->datos->id) ? "" : "hidden"; ?>>
      <label for="" class="form-label">Id</label>
      <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder=""
        value="<?php echo isset($this->datos->id) ? $this->datos->id : ""; ?>" <?php echo isset($this->datos->id) ? "readonly" : ""; ?> style="background-color: rgb(184, 184, 184);">

    </div>
    <div class="mb-3">
      <label for="" class="form-label">Nombre</label>
      <input type="text" required class="form-control" name="nombre" id="nombre" aria-describedby="helpId"
        placeholder="Ingrese el nombre de curso"
        value="<?php echo isset($this->datos->nombre) ? $this->datos->nombre : ""; ?>">
      <small id="helpId" class="form-text text-muted">Nombre Curso</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Descripcion</label>
      <input type="text" required class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId"
        placeholder="Ingrese la descripcion del curso"
        value="<?php echo isset($this->datos->descripcion) ? $this->datos->descripcion : ""; ?>">
      <small id="helpId" class="form-text text-muted">Descripcion Curso</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Tiempo</label>
      <input type="number" min="0" required class="form-control" name="tiempo" id="tiempo" aria-describedby="helpId"
        placeholder="Ingrese la duración del curso"
        value="<?php echo isset($this->datos->tiempo) ? $this->datos->tiempo : ""; ?>">
      <small id="helpId" class="form-text text-muted">Tiempo de duración del Curso en meses</small>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
    <div class="mb-3">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a type="reset" href="<?php echo constant('URL'); ?>cursos" class="btn btn-secondary">Volver</a>
        </div>
  </div>

</div>