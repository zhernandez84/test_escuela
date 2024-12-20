<?php echo $this->extend('plantilla/layout')?>

<?php echo $this->section('contenido')?>
   
<p></p>
<div class="container">
<form>
  <div class="row">
    <div class="col-5">
      <!--<input type="text" id="txt_id" class="form-control" placeholder="Identificador">-->
      <select id="txt_id" class="form-control">
            <option value="0">Alumno</option>
      <?php  
                    if(isset($alumnos)){
                    for ($i = 0; $i < count($alumnos); $i++){
                      $id= $alumnos[$i]['sIdAlumno'];
                      $nombre= $alumnos[$i]['sNombre']." ".$alumnos[$i]['sPaterno']." ".$alumnos[$i]['sMaterno']." / ". $id;
                      echo '<option value="'.$id.'">'.$nombre.'</option>';
                    }}
            ?>
      </select>
    </div>
    <div class="col-2">
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
      <!-- <input type="text" id="txt_grado" class="form-control" placeholder="Grado"> -->
    </div>
    <div class="col-2">
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
    <div class="col-1">
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
  
    <div class="col-2">
        <button class="btn btn-outline-secondary" type="button" id="btnBuscarCalificacion">Buscar</button>   
    </div>
    </div>
</form>
        
         

</div>

<div id='miElemento2'></div>

<?php echo $this->endSection()?>

