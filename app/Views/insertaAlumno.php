<?php echo $this->extend('plantilla/layout')?>


<?php echo $this->section('contenido')?>
<p></p>
<div class="container p-4 ">
    <h3>Insertar Alumno</h3>
    <form>
      <div class="mb-3 col-4">
        <label for="nIdAlumno" class="form-label">Identificador Alumno</label>
        <input type="text" class="form-control " id="txt_id" required>
      </div>
      <div class="mb-3 col-4">
        <label for="nIdMateria" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="txt_nombre" required>
      </div>
      <div class="mb-3 col-4">
        <label for="nCalificacion" class="form-label">Apellido Paterno</label>
        <input type="text" class="form-control" id="txt_paterno" step="0.1" min="0" max="10" required>
      </div>
      <div class="mb-3 col-4">
        <label for="nGrado" class="form-label">Apellido Materno</label>
        <input type="text" class="form-control" id="txt_materno">
      </div>
      <div class="mb-3 col-4">
        <label for="nMes" class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control" id="fecha" name="fecha" required>        
      </div>
      <div class="mb-3 col-4 ">
        <label for="nYear" class="form-label">Genero</label>
        <select class="form-select" id="genero" name="genero">
            <option value="0">Género</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
      </div>
      <button type="button" id="btnInsertarAlumno" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</div>

<?php echo $this->endSection()?>



