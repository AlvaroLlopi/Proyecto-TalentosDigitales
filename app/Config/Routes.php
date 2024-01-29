<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Inicio', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');
$routes->get('catalogo', 'Home::catalogo');
$routes->get('usuarioListado','Usuario_controller::ListadoUsuario');
$routes->get('usuarioseditar/(:num)', 'Usuario_controller::editarusuario/$1');
$routes->post('usuarios/update/(:num)', 'Usuario_controller::update/$1');
$routes->get('usuariosbaja/(:num)', 'Usuario_controller::baja/$1');
$routes->get('productoListado', 'Producto_controller::ListadoProducto');
$routes->get('productoeditar/(:num)', 'Producto_controller::editarproducto/$1');
$routes->post('producto/update/(:num)', 'Producto_controller::update/$1');
$routes->get('productosbaja/(:num)', 'Producto_controller::baja/$1');





/* rutas del Registro de Usuarios */
$routes->get('/registro','Usuario_controller::create');
$routes->post('/enviar-form','Usuario_controller::formValidation');

/* rutas del Registro de Productos */
$routes->get('registrar','Producto_controller::create');
$routes->post('/enviar-formu','Producto_controller::formValidation');

/* rutas del login */
$routes->get('/login', 'login_controller');
$routes->post('/enviarlogin','login_controller::auth');
$routes->get('/panel', 'Panel_controller::index',['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');



if(is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')){
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}