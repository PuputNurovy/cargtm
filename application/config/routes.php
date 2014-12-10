<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "c_login";
$route['404_override'] = '';

//admin
$route['home']="c_adminView/index";
$route['user']="c_adminView/v_user";
$route['persiapan']="c_adminView/v_persiapanAngkut";
$route['angkut']="c_adminView/v_angkutKargo";
$route['restore']="c_adminView/v_restore";
$route['backup']="c_adminView/v_backup";

//operator
$route['opHome']="c_operatorView/index";
$route['opDaftar']="c_operatorView/v_daftarKargoOp";
$route['opPengambilan']="c_operatorView/v_pengambilanKargo";
$route['opPersiapan']="c_operatorView/v_persiapanAngkut";

//gerbang
$route['gbHome']="c_gerbangView/index";
$route['gbDaftar']="c_gerbangView/v_daftar";
$route['gbUnknown']="c_gerbangView/v_unknown";

//TAA
$route['taaHome']="c_taaView/index";
$route['taaDaftar']="c_taaView/v_daftarTaa";

/* End of file routes.php */
/* Location: ./application/config/routes.php */