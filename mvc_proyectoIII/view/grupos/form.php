<div style="max-width:50%; margin:auto; padding:auto; background-color: #EBD9F6;" class="mt-3">
 
   <div class="p-3">
    <div class="mb-3" <?php echo isset($this->datos->id) ? "" : "hidden"; ?>>
      <label for="" class="form-label">Id</label>

      <input type="text" value="<?php echo isset($this->datos->id) ? $this->datos->id : ""; ?>" 
      <?php echo isset($this->datos->id) ? "readonly" : ""; ?>
       style="background-color: rgb(184, 184, 184);" class="form-control"
        name="id" id="id" aria-describedby="helpId" placeholder="">
      <small id="helpId" class="form-text text-muted"></small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label ">Nombre</label>
      <input type="text" value="<?php echo isset($this->datos->nombre) ? $this->datos->nombre : ""; ?>"
        class="form-control" name="nombre" id="nombre" aria-describedby="helpId"
        placeholder="Ingrese el nombre del curso">
      <small id="helpId" class="form-text text-muted">Ingrese el nombre del curso</small>
    </div>
    <div class="mb-3">
      <button type="reset" class="btn btn-danger">Reset</button>
      ||
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

 

</div>