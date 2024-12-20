
   
<p></p>
<div class="container">
    <table class="table">
        <thead>
            <th>ID</th>       
            <th>Estatus</th>
            <th>Identificador</th>
            <th>Nombre</th>
            <th>Fecha Nacimiento</th>
            <th>Genero</th>
        </thead>
        <tbody>

        <?php  if(isset($alumnos)){
         foreach ($alumnos as $alumno) {
        ?>
            <tr>
                <td><?php echo $alumno->nIdAlumno ?></td>
                <td><?php echo $alumno->sEstatus ?></td>
                <td><?php echo $alumno->sIdAlumno ?></td>
                <td><?php echo $alumno->sNombre.' '.$alumno->sPaterno.' '.$alumno->sMaterno ?></td>
                <td><?php echo date("Y-m-d", strtotime($alumno->dFecNacimiento)) ?></td>     
                <td><?php echo $alumno->sGenero ?></td>          
            </tr>
            <?php } }?>  
       
        </tbody>
    </table>
</div>