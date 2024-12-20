<?php echo $this->extend('plantilla/layout')?>

<?php echo $this->section('contenido')?>
   
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
        <?php  
                if(isset($alumnos)){
                for ($i = 0; $i < count($alumnos); $i++){
        ?>
                <tr>
                    <td><?php echo $alumnos[$i]['nIdAlumno'] ?></td>
                    <td><?php echo $alumnos[$i]['sEstatus'] ?></td>
                    <td><?php echo $alumnos[$i]['sIdAlumno'] ?></td>
                    <td><?php echo $alumnos[$i]['sNombre']." ".$alumnos[$i]['sPaterno']." ".$alumnos[$i]['sMaterno'] ?></td>
                    <td><?php echo date("Y-m-d", strtotime($alumnos[$i]['dFecNacimiento'])) ?></td>
                    <td><?php echo $alumnos[$i]['sGenero'] ?></td>
                </tr>
        <?php } }?>  
        </tbody>
    </table>
</div>
<?php echo $this->endSection()?>