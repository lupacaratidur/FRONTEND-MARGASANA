<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BPDController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PemerintahDesaController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;
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





// require __DIR__ . '/auth.php';
// require __DIR__ . '/front/front.php';
/*------------------------------------------BACKEND----------------------------------------------- */

Route::get('/masuk', [AuthController::class, 'masuk'])->name('login');
Route::post('/masuk', [AuthController::class, 'login'])->name('login');

Route::get('/daftar', [AuthController::class, 'daftar'])->middleware('guest');
Route::post('/daftar', [AuthController::class, 'register'])->middleware('guest');

Route::post('/keluar', [AuthController::class, 'keluar'])->name('logout');


Route::get('/dashboard', function () {
    return view('index', [
        'title'           => 'Dashboard',
        // 'total_laporan'   => Pengaduan::all()->count(),
        // 'laporan_selesai' => Pengaduan::where('status', 'selesai')->count(),
        // 'total_tanggapan' => Tanggapan::all()->count(),
    ]);
})->name('dashboard');

Route::resource('berita', BeritaController::class);
Route::resource('galeri', GaleriController::class);
Route::resource('bpd', BPDController::class);
Route::resource('pemerintah_desa', PemerintahDesaController::class);


Route::put('/pengaduan/respon/{pengaduan}', [PengaduanController::class, 'response']);
Route::get('/pengaduan/belum', [PengaduanController::class, 'belum']);
Route::get('/pengaduan/proses', [PengaduanController::class, 'proses']);
Route::get('/pengaduan/selesai', [PengaduanController::class, 'selesai']);
Route::resource('/pengaduan', PengaduanController::class);
Route::resource('/tanggapan', TanggapanController::class);

// Route::put('/pengajuan-surat/{pengajuan_surat}/approve', [PengajuanSuratController::class, 'approve'])->middleware('auth')->name('pengajuan_surat.approve');
// Route::put('/pengajuan-surat/{pengajuan_surat}/reject', [PengajuanSuratController::class, 'reject'])->middleware('auth')->name('pengajuan_surat.reject');
// Route::get('/pengajuan-surat/{pengajuan_surat}/preview', [PengajuanSuratController::class, 'preview'])->middleware('auth')->name('pengajuan_surat.preview.surat');
// Route::get('/pengajuan-surat/{pengajuan_surat}/download', [PengajuanSuratController::class, 'download'])->middleware('auth')->name('pengajuan_surat.download.surat');
// Route::resource('/pengajuan-surat', PengajuanSuratController::class);

// Route::group(['middleware' => ['auth', 'hanyaAdmin']], function () {
//     Route::get('/pengguna/masyarakat', [UserController::class, 'masyarakat']);
//     Route::get('/pengguna/petugas', [UserController::class, 'petugas']);
//     Route::resource('/pengguna', UserController::class);
// });





// Route::resource('pemerintah_desa', PemerintahDesaController::class)->middleware('auth');


// Route::resource('bpd', BPDController::class)->middleware('auth');