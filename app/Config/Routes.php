<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/buscar', 'Buscar::Index');
$routes->get('/buscarAlumno', 'Buscar::buscarAlumno');
$routes->get('/insertarAlumno', 'Buscar::InsertarAlumno');
$routes->post('/InsertarAlumnoA', 'Buscar::Insertar');
$routes->get('/buscarCalificacion', 'Calificaciones::Index');
$routes->post('/buscarCalificacionA', 'Calificaciones::Buscar');
$routes->get('/InsertarCalificacion', 'Calificaciones::InsertarCalificaciones');
$routes->post('/InsertarCalificacionA', 'Calificaciones::Insertar');
//$route['buscar'] = 'Buscar::Index';
//$routes->get('/', 'Home::getApiData');
