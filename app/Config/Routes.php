<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/buku', 'Buku::index');

$routes->get('/buku/tambah', 'Buku::tambah');
$routes->post('/buku/simpan', 'Buku::simpan');
$routes->post('/buku/update/(:num)', 'Buku::update/$1');
$routes->get('/buku/ubah/(:num)', 'Buku::ubah/$1');
$routes->get('/buku/(:any)', 'Buku::detail/$1');
$routes->delete('/buku/(:num)','Buku::hapus/$1');

$routes->get('/anggota', 'Anggota::index');

$routes->group('pages', function ($routes) {
    $routes->get('about', 'Pages::about');
    $routes->get('contact', 'Pages::contact');
});