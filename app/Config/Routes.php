<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');


//rotas de usuários
$routes->get('usuarios', 'Usuario::index');
$routes->get('usuarios/exibir/(:num)', 'Usuario::exibir/$1');
$routes->get('usuarios/editar/(:num)', 'Usuario::editar/$1');
$routes->match(['get', 'post'], 'usuarios/excluir/(:num)', 'Usuario::excluir/$1');
$routes->get('usuarios/imagem/(:any)', 'Usuario::imagem/$1');
$routes->get('usuarios/editarimagem/(:num)', 'Usuario::editarImagem/$1');
$routes->post('usuarios/atualizar', 'Usuario::atualizar');
$routes->post('usuarios/cadastrar', 'Usuario::cadastrar');
$routes->post('usuarios/upload', 'Usuario::upload');
$routes->get('usuarios/criar', 'Usuario::criar');
$routes->get('usuarios/recuperausuarios', 'Usuario::recuperaUsuarios');

//rotas de grupos
$routes->get('grupos', 'Grupos::index');
$routes->get('grupos/recuperagrupos', 'Grupos::recuperagrupos');
$routes->get('grupos/grupobyid', 'Grupos::grupobyid');
$routes->get('grupos/criar', 'Grupos::criar');

//rotas de clientes
$routes->get('clientes', 'Clientes::index');
$routes->get('clientes/recuperaclientes', 'Clientes::recuperaclientes');

//rotas de departamentos
$routes->get('departamentos', 'Departamento::index');

$routes->get('pessoal', 'DepPessoal::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
