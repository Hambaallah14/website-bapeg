<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\TugasbidangController;
use App\Http\Controllers\UraiantugasController;
use App\Http\Controllers\CWebsites;
use App\Http\Controllers\CDashboard;
use App\Http\Controllers\CLogin;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\SlidebannerController;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\StrukturorganisasiController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\BukutamuController;
use App\Http\Controllers\PensiunController;
use App\Http\Controllers\KenaikanpangkatController;
use App\Http\Controllers\GajiberkalaController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\IzintugasbelajarController;
use App\Http\Controllers\JafungController;
use App\Http\Controllers\PencatumangelarController;
use App\Http\Controllers\SatyalancanaController;
use App\Http\Controllers\HukumandisiplinController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\SejarahController;
use App\Models\Tugasbidang_model;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// WEBSITE
Route::get('/', [CWebsites::class, 'index']);

Route::get('/profil/sejarah', [CWebsites::class, 'sejarah']);
Route::get('/profil/struktur-organisasi', [CWebsites::class, 'struktur_organisasi']);
Route::get('/profil/visi-misi', [CWebsites::class, 'visi_misi']);
Route::get('/profil/tupoksi', [CWebsites::class, 'tupoksi']);


Route::get('/layanan/pensiun', [CWebsites::class, 'pensiun']);
Route::get('/layanan/kenaikan-pangkat', [CWebsites::class, 'kenaikan_pangkat']);
Route::get('/layanan/gaji-berkala', [CWebsites::class, 'gaji_berkala']);
Route::get('/layanan/mutasi', [CWebsites::class, 'mutasi']);
Route::get('/layanan/izin-tugas-belajar', [CWebsites::class, 'izin_tugas_belajar']);
Route::get('/layanan/jabatan-fungsional', [CWebsites::class, 'jabatan_fungsional']);
Route::get('/layanan/pencantuman-gelar', [CWebsites::class, 'pencantuman_gelar']);
Route::get('/layanan/satyalancana', [CWebsites::class, 'satyalancana']);
Route::get('/layanan/hukuman-disiplin', [CWebsites::class, 'hukuman_disiplin']);
Route::get('/layanan/cuti', [CWebsites::class, 'cuti']);


Route::resource('/buku_tamu', BukutamuController::class);


Route::get('/berita', [CWebsites::class, 'berita']);
Route::get('/berita/lihat/{id}', [CWebsites::class, 'lihat_berita']);

Route::get('/pengumuman', [CWebsites::class, 'pengumuman']);

Route::get('/ppid/struktur', [CWebsites::class, 'struktur_ppid']);
Route::get('/ppid/informasi', [CWebsites::class, 'informasi_ppid']);
Route::get('/ppid/informasi/lihat/{id}', [CWebsites::class, 'lihat_informasi_ppid']);





// DASHBOARD
Route::get('/main-dashboard', [CDashboard::class, 'index'])->middleware('auth');
Route::resource('/main-dashboard/slide-banner', SlidebannerController::class)->middleware('auth');


// Dashboard - Profil
Route::resource('/main-dashboard/profil/sejarah', SejarahController::class)->middleware('auth');
Route::resource('/main-dashboard/profil/struktur-organisasi', StrukturorganisasiController::class)->middleware('auth');
Route::resource('/main-dashboard/profil/visi-misi', VisimisiController::class)->middleware('auth');
Route::resource('/main-dashboard/profil/tupoksi', BidangController::class)->middleware('auth');
Route::resource('/main-dashboard/profil/tupoksi/bidang/{id}', TugasbidangController::class)->middleware('auth');
Route::resource('/main-dashboard/profil/tupoksi/bidang/{id}/{id1}', UraiantugasController::class)->middleware('auth');




// Dashboard - Layanan
Route::resource('/main-dashboard/layanan/pensiun', PensiunController::class)->middleware('auth');
Route::resource('/main-dashboard/layanan/kenaikan-pangkat', KenaikanpangkatController::class)->middleware('auth');
Route::resource('/main-dashboard/layanan/gaji-berkala', GajiberkalaController::class)->middleware('auth');
Route::resource('/main-dashboard/layanan/mutasi', MutasiController::class)->middleware('auth');
Route::resource('/main-dashboard/layanan/izin-tugas-belajar', IzintugasbelajarController::class)->middleware('auth');
Route::resource('/main-dashboard/layanan/jabatan-fungsional', JafungController::class)->middleware('auth');
Route::resource('/main-dashboard/layanan/pencantuman-gelar', PencatumangelarController::class)->middleware('auth');
Route::resource('/main-dashboard/layanan/satyalancana', SatyalancanaController::class)->middleware('auth');
Route::resource('/main-dashboard/layanan/hukuman-disiplin', HukumandisiplinController::class)->middleware('auth');
Route::resource('/main-dashboard/layanan/cuti', CutiController::class)->middleware('auth');


// Dashboard - Informasi
Route::resource('/main-dashboard/informasi/berita', BeritaController::class)->middleware('auth');
Route::resource('/main-dashboard/informasi/pengumuman', PengumumanController::class)->middleware('auth');
Route::resource('/main-dashboard/informasi/ppid', PpidController::class)->middleware('auth');
Route::resource('/main-dashboard/informasi/buku-tamu', BukutamuController::class)->middleware('auth');











// LOGIN
Route::get('/login-backend', [CLogin::class, 'index'])->name('login')->middleware('guest');
Route::post('/login-backend', [CLogin::class, 'authenticate']);
Route::post('/logout', [CLogin::class, 'logout']);


Route::get('/registrasi', [CLogin::class, 'registrasi'])->middleware('guest');
Route::post('/registrasi', [CLogin::class, 'add_registrasi']);
