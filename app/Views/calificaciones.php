
   
<p></p>
<div class="container">
    <table class="table">
        <thead>
            <th>ID</th>       
            <th>Alumno</th>
            <th>Materia</th>
            <th>Grado</th>
            <th>Mes</th>
            <th>Año</th>
            <th>Calificacion</th>
        </thead>
        <tbody>
        <?php  if(isset($calificaciones)){
            $meses  = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
            foreach ($calificaciones as $calificacion) {
            
        ?>
            <tr>
                <td><?php echo $calificacion->nIdAlumno ?></td>
                <td><?php echo $calificacion->sAlumno ?></td>
                <td><?php echo $calificacion->sMateria ?></td>
                <td><?php echo $calificacion->sGrado ?></td>
                <td><?php echo $meses[($calificacion->nMes)-1] ?></td>
                <td><?php echo $calificacion->nYear ?></td>
                <td><?php echo $calificacion->nCalificacion ?></td>
                     
            </tr>
            <?php } }?>  
        
       
        </tbody>
    </table>
</div>