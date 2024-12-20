<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo site_url('home'); ?>">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Alumnos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo site_url('insertarAlumno'); ?>">Insertar</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url('buscar'); ?>">Buscar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Calificaciones
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo site_url('InsertarCalificacion'); ?>">Insertar</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url('buscarCalificacion'); ?>">Buscar</a></li>
          </ul>
        </li>        
      </ul>
    </div>
  </div>
</nav>