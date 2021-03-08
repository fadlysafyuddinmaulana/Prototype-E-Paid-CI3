<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'starter/siswa';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['logout']                = 'auth/logout';

$route['report-pdf']            = 'pembayaran/report_spp';

$route['siswa']                 = 'starter/siswa';
$route['admin']                 = 'starter/admin';

$route['dashboard-admin']       = 'Dashboard/dashboard_petugas';
$route['dashboard-siswa']       = 'Dashboard/dashboard_siswa';

$route['data-siswa']            = 'Siswa/data_siswa';
$route['data-petugas']          = 'Petugas/index';
$route['data-kelas']            = 'Siswa/data_kelas';
$route['data-spp']              = 'Siswa/data_spp';
$route['data-pembayaran']       = 'Pembayaran/data_pembayaran';
$route['transaksi']             = 'Pembayaran/index';
$route['history']               = 'Pembayaran/history_siswa';
$route['entri']                 = 'Pembayaran/transaksi';

$route['add-petugas']           = 'Petugas/add_petugas';
$route['add-siswa']             = 'siswa/add_siswa';
$route['add-kelas']             = 'siswa/add_kelas';
$route['add-spp']               = 'siswa/add_spp';

$route['edit-siswa/(:any)']     = 'siswa/edit_siswa/$1';
$route['edit-kelas/(:any)']     = 'siswa/edit_kelas/$1';
$route['edit-spp/(:any)']       = 'siswa/edit_spp/$1';
$route['edit-petugas/(:any)']   = 'petugas/edit_petugas/$1';

$route['delete-siswa/(:any)']        = 'siswa/delete_siswa/$1';
$route['delete-kelas/(:any)']        = 'siswa/delete_kelas/$1';
$route['delete-spp/(:any)']          = 'siswa/delete_spp/$1';
$route['delete-petugas/(:any)']      = 'petugas/delete_petugas/$1';
$route['delete-pembayaran/(:any)']   = 'Pembayaran/delete_pembayaran/$1';

$route['entri-spp/(:any)']      = 'pembayaran/transaksi/$1';
