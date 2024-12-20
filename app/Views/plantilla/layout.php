<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $titulo?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  </head>
  <body>
    <?php echo $this->include("plantilla/menu");?>
    <?php echo $this->renderSection("contenido");?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="<?php echo base_url();?>/js/buscar.js"></script>
    <script src="<?php echo base_url();?>/js/buscarCalificacion.js"></script>
    <script src="<?php echo base_url();?>/js/insertarCalificacion.js"></script>
    <script src="<?php echo base_url();?>/js/insertarAlumno.js"></script>
    <script>		
		  BASE_PATH = "<?php echo base_url();?>";
      flatpickr("#fecha", {
        dateFormat: "Y-m-d" 
      });
	  </script> 	
  </body>
</html>