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

$route['default_controller'] = "CDefault";
$route['404_override'] = 'CDefault/errorView';
/**
 * ----------------------ROUTER VIEW---------------------------------
 */

//manager
$route['manager']="CManager";
$route['manager/manajemen-pengguna']="CManager/daftarPenggunaView";
$route['manager/laporan/persiapan-angkut']="CManager/persiapanAngkutView";
$route['manager/laporan/pengambilan-kargo']="CManager/pengambilanKargoView";
$route['manager/laporan/transport-dan-alat']="CManager/transportDanAlatView";
$route['manager/backup-dan-restore/backup']="CManager/backupView";
$route['manager/backup-dan-restore/restore']="CManager/restoreView";
$route['manager/pengaturan']="CManager/pengaturanView";


//operator
$route['operator-terminal']="COperator";
$route['operator-terminal/persiapan-angkut']="COperator/persiapanAngkutView";
$route['operator-terminal/pengambilan-kargo']="COperator/pengambilanKargoView";
$route['operator-terminal/rincian-transaksi-persiapan/(:num)']="COperator/rincianPersiapanView";
$route['operator-terminal/rincian-transaksi-pengambilan/(:num)']="COperator/rincianPengambilanView";

//teknisi
$route['teknisi-kargo']="CTekkar";
// $route['petugas-gerbang/kargo-tidak-diketahui']="CPetger/kargoTidakDiketahuiView";

//transport
$route['petugas-transport']="CPettra";

//-----------------------------

$route['(:any)/profile'] = "CDefault/profile";
$route['(:any)/ubah-profile'] = "CDefault/ubahProfile";


/**
 * ----------------------ROUTER AKSI---------------------------------
 */

//Login

$route['login']         = "CLogin"; 
$route['autentikasi']   = "CLogin/autentikasi";
$route['(:any)/logout'] = "CLogin/hapusSesi";

//manager
$route['manager/tambah-pengguna']="CManager/tambahPengguna";

//teknisi
$route['teknisi-kargo/ubah-status-masuk/(:num)']="CTekkar/ubahStatusMasuk";
$route['teknisi-kargo/ubah-status-keluar/(:num)']="CTekkar/ubahStatusKeluar";

//operator
$route['operator-terminal/tambah-pengambilan']="COperator/tambahPengambilan";
$route['operator-terminal/ubah-pengambilan']="COperator/ubahPengambilan";
$route['operator-terminal/hapus-pengambilan']="COperator/hapusPengambilan";
$route['operator-terminal/tambah-rincian-pengambilan']="COperator/tambahRincianPengambilan";
$route['operator-terminal/ubah-rincian-pengambilan']="COperator/ubahRincianPengambilan";
$route['operator-terminal/hapus-rincian-pengambilan']="COperator/hapusRincianPengambilan";

$route['operator-terminal/tambah-angkut']="COperator/tambahAngkut";
$route['operator-terminal/ubah-angkut']="COperator/ubahAngkut";
$route['operator-terminal/hapus-angkut']="COperator/hapusAngkut";
$route['operator-terminal/tambah-rincian-angkut']="COperator/tambahRincianAngkut";
$route['operator-terminal/ubah-rincian-angkut']="COperator/ubahRincianAngkut";
$route['operator-terminal/hapus-rincian-angkut']="COperator/hapusRincianAngkut";

//transport
$route['petugas-transport/tambah-transport']="CPettra/tambahTransport";
$route['petugas-transport/ubah-transport']="CPettra/ubahTransport";
$route['petugas-transport/hapus-transport']="CPettra/hapusTransport";

/* End of file routes.php */
/* Location: ./application/config/routes.php */