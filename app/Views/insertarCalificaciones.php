<?php echo $this->extend('plantilla/layout')?>


<?php echo $this->section('contenido')?>

<p></p>
<div class="container p-4 ">
    <h3>Insertar Calificación</h3>
    <form>
      <div class="mb-3 col-4">
        <label for="nIdAlumno" class="form-label">Alumno</label>
        <select id="txt_id" class="form-control">
        <option value="0">Alumno</option>
        <?php  
                if(isset($alumnos)){
                for ($i = 0; $i < count($alumnos); $i++){
                  $id= $alumnos[$i]['nIdAlumno'];
                  $nombre= $alumnos[$i]['sNombre']." ".$alumnos[$i]['sPaterno']." ".$alumnos[$i]['sMaterno'];
                  echo '<option value="'.$id.'">'.$nombre.'</option>';
                }}
        ?>
        </select>
        <!--<input type="number" class="form-control " id="txt_id" required>-->
      </div>
      <div class="mb-3 col-4">
        <label for="nIdMateria" class="form-label">Materia</label>        
        <select id="txt_materia" class="form-control">
        <option value="0">Materia</option>
        <?php  
                if(isset($materias)){
                for ($i = 0; $i < count($materias); $i++){
                  $id_materia= $materias[$i]['nIdMateria'];
                  $materia= $materias[$i]['sMateria'];;
                  echo '<option value="'.$id_materia.'">'.$materia.'</option>';
                }}
        ?>
      </select>
      <!--<input type="number" class="form-control" id="txt_materia" required>-->
      </div>
      <div class="mb-3 col-4">
        <label for="nCalificacion" class="form-label">Calificación</label>
        <input type="number" class="form-control" id="txt_calificacion" step="0.1" min="0" max="10" required>
      </div>
      <div class="mb-3 col-4">
        <label for="nGrado" class="form-label">Grado</label>
        <select id="txt_grado" class="form-control">
        <option value="0">Grado</option>
        <?php  
                if(isset($grados)){
                for ($i = 0; $i < count($grados); $i++){
                  $id_grado= $grados[$i]['nIdGrado'];
                  $grado= $grados[$i]['sGrado'];;
                  echo '<option value="'.$id_grado.'">'.$grado.'</option>';
                }}
        ?>
         </select>
        <!-- <input type="number" class="form-control" id="txt_grado" required>-->
      </div>
      <div class="mb-3 col-4">
        <label for="nMes" class="form-label">Mes</label>
        <select id="cmb_mes" class="form-control">
        <?php
                $mes=date("n"); 
                $meses  = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                for($i = 0 ; $i < count($meses) ; $i++){   
                    if($mes==$i+1){
                        echo '<option selected value="'.($i+1).'">'.$meses[$i].'</option>';
                    }else{
                        echo '<option value="'.($i+1).'">'.$meses[$i].'</option>';
                    }                                                
                    
                }
            ?>
        </select>
      </div>
      <div class="mb-3 col-4 ">
        <label for="nYear" class="form-label">Año</label>
        <select id="cmb_year" class="form-control">
        <?php
            $year=date("Y"); 
            echo $year;                                                  
            for($i = 0 ; $i < 3 ; $i++){ 
                $anio=$year-$i;                                                  
                echo '<option value="'.$anio.'">'.$anio.'</option>';
            }
        ?>
        </select>
      </div>
      <button type="button" id="btnInsertarCalificacion" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</div>

<?php echo $this->endSection()?>



