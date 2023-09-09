<?php

use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//jika mengakses /profile  maka akan diarahkan ke fungsi profile yang ada di controller home
// $routes->get('/profile/(:any)/(:any)/(:any)', 'Home::profile');

$routes->get('/profile/(:any)/(:any)/(:any)', [Home::class, 'profile']);
$routes->get('/profile/(:any)', [Home::class, 'profile']);