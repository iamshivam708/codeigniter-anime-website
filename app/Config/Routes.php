<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Blog::index');
$routes->get('/single/(:num)', 'Blog::single/$1');
$routes->get('/single/movie/(:num)', 'Blog::singleMovie/$1');
// request anime
$routes->get('/anime/create', 'Blog::request');
$routes->post('/anime/create', 'Blog::request');
//search
$routes->get('/anime/search/', 'Blog::search');
$routes->post('/anime/search/', 'Blog::search');
// search according to category
$routes->get('/anime/category/(:alphanum)', 'Blog::category/$1');
// get all latest anime
$routes->get('/anime/all/', 'Blog::showAllAnimes');
// get all latest movies
$routes->get('/movie/all/', 'Blog::showAllMovies');


//admin 

//show anime series
$routes->get('/admin/show', 'Admin::show');
//create anime series
$routes->get('/admin/create', 'Admin::create');
$routes->post('/admin/create', 'Admin::create');
//update anime series
$routes->get('/admin/edit/(:num)', 'Admin::update/$1');
$routes->post('/admin/edit/(:num)', 'Admin::update/$1');

//create anime movies
$routes->get('/admin/movie/show', 'Admin::showMovie');
$routes->get('/admin/movie/create', 'Admin::createMovie');
$routes->post('/admin/movie/create', 'Admin::createMovie');

//categories
$routes->get('/admin/category/show','Categories::show');
$routes->get('/admin/category/','Categories::create');
$routes->post('/admin/category/','Categories::create');
// update category
$routes->get('/admin/category/edit/(:num)', 'Categories::update/$1');
$routes->post('/admin/category/edit/(:num)', 'Categories::update/$1');
//delete category
$routes->get('/admin/category/delete/(:num)','Categories::delCategory/$1');

//download anime
$routes->post('/admin/anime/download/','AnimeDownload::create');
$routes->get('/admin/anime/download/','AnimeDownload::create');

$routes->get('/admin/download/(:num)/(:num)','AnimeDownload:show/$1/$2');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
