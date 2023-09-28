<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(FrontPageController::class)->group(function(){
    // menu beranda
    Route::get('/','Beranda')->name('beranda');
    // menu profile
    Route::get('/profile/sejarah','Sejarah')->name('profile.sejarah');
    Route::get('/profile/visi-misi-tujuan','VisiMisiTujuan')->name('profile.visi');
    Route::get('/profile/struktur-organisasi','StrukturOrganisasi')->name('profile.struktur');
    // menu informasi pengujian
    Route::get('/informasi-pengujian/pengujian-tarik', 'Tarik')->name('informasiPengujian.tarik');
    Route::get('/informasi-pengujian/kuat-tekan', 'Tekan')->name('informasiPengujian.tekan');
    Route::get('/informasi-pengujian/batu-bara', 'Batubara')->name('informasiPengujian.batubara');
    Route::get('/informasi-pengujian/xrd', 'Xrd')->name('informasiPengujian.xrd');
    Route::get('/informasi-pengujian/kekerasan-bahan', 'Kekerasan')->name('informasiPengujian.kekerasan');
    Route::get('/informasi-pengujian/halal', 'Halal')->name('informasiPengujian.halal');
    // menu tentang kami
    Route::get('/tentang-kami/laboratorium', 'Laboratorium')->name('tentangKami.laboratorium');
    Route::get('/tentang-kami/fasilitas', 'Fasilitas')->name('tentangKami.fasilitas');
    Route::get('/tentang-kami/galeri', 'Galeri')->name('tentangKami.galeri');
    // menu hubungi kami
    Route::get('hubungi-kami','Hubungi')->name('hubungiKami');
    // menu download
    Route::get('download','Download')->name('front.download');
    // menu alur pelayanan
    Route::get('alur','Alur')->name('front.alur');
    // pindah halaman
    Route::get('/pindahlogin', 'pindahLogin')->name('pindahweblogin');

});

Route::controller(AuthController::class)->group(function(){
    Route::get('/admin/login','LoginPage')->middleware('guest')->name('login');
    Route::get('/admin/logout','logout')->middleware('auth')->name('logout');
    Route::post('/admin/login/check', 'authenticate')->name('authenticate');
});

Route::controller(AdminDashboardController::class)->middleware('auth')->group(function(){
    Route::get('/dashboard/home','Index')->name('admin.dashboard.home');
});

Route::controller(KategoriController::class)->middleware('auth')->group(function(){
    Route::get('/dashboard/kategori-berita/all','index')->name('admin.dashboard.berita.kategori-berita.all');
    Route::post('/dashboard/kategori-berita/store', 'store')->name('admin.dashboard.berita.kategori-berita.store');
    Route::delete('/dashboard/kategori-berita/{kategori}','destroy')->name('admin.dashboard.berita.kategori-berita.destroy');
    Route::patch('/dashboard/kategori-berita/{kategori}/update','update')->name('admin.dashboard.berita.kategori-berita.update');
});

Route::controller(BeritaController::class)->middleware('auth')->group(function(){
    Route::get('/dashboard/berita/all','index')->name('admin.dashboard.berita.all');
    Route::get('/dashboard/berita/create','create')->name('admin.dashboard.berita.create');
    Route::post('/dashboard/berita/store','store')->name('admin.dashboard.berita.store');
    Route::get('/dashboard/berita/show','show')->name('admin.dashboard.berita.show');
    Route::get('/dashboard/berita/{berita}/delete','destroy')->name('admin.dashboard.berita.destroy');
});
