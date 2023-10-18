<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/*del lado izquierdo del parentesis van las rutas asignadas en el navbar
del lado derecho van 'NombreDelControlador::FuncionAsignada' en este caso 
el controlador es Home y index y demas son las funciones designadas en el controlador*/
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');

/*Rutas del registro de usuarios */
$routes-> get('/registro', 'usuario_controller::create');
$routes-> post('/enviar-form', 'usuario_controller::formValidation');

/*Rutas del login  */
$routes-> get('/login', 'login_controller');
$routes-> post('/enviarlogin', 'login_controller::auth');
$routes-> get('/panel', 'Panel_controller::index', ["filter" => 'auth']);
$routes-> get('/logout', 'login_controller::logout');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
