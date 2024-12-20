<?php echo $this->extend('plantilla/layout')?>


<?php echo $this->section('contenido')?>
   
<p></p>
<div class="container">
    <div class="input-group mb-3">     
        <input type="text" class="form-control" id="txt_buscar" placeholder="Nombre o Identificador" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="button" id="btnBuscar">Buscar</button>    
    </div>
</div>

<div id='miElemento'></div>

<?php echo $this->endSection()?>



