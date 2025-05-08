<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->post('/validar-usuario', 'Home::validarUsuario');
// $routes->get('/validar-usuario', 'Home::validarUsuario');
