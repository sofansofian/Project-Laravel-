<?php
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
/*
|-----------------------------------------------------------------------
---
| Web Routes
|-----------------------------------------------------------------------
---
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['guest'])->group(function (){
    Route::get('/', function () {
        return view('home');
    });
});

Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');

Route::group(['middleware' => ['auth', 'checklevel:user']], function () {
    Route::get('/user/home', [LoginRegisterController::class, 'userHome']);
});

Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('/admin/home', [LoginRegisterController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/tambah', [AdminController::class, 'tambah'])->name('admin.tambah');
    Route::post('/tambahAdmin', [AdminController::class, 'postTambahAdmin'])->name('postTambahAdmin');
    Route::get('/editAdmin/{id}', [AdminController::class, 'editAdmin'])->name('editAdmin');
    Route::post('/postEditAdmin/{id}', [AdminController::class, 'postEditAdmin'])->name('postEditAdmin');
    Route::get('/deleteAdmin/{id}', [AdminController::class, 'deleteAdmin'])->name('deleteAdmin');
    
    Route::get('/admin/buku', [AdminController::class, 'adminBuku'])->name('admin.buku');
    Route::get('/admin/tambahBuku', [AdminController::class, 'tambahBuku'])->name('admin.tambahBuku');
    Route::post('/postTambahBuku', [AdminController::class, 'postTambahBuku'])->name('postTambahBuku');
    Route::get('/admin/editBuku/{id}', [AdminController::class, 'editBuku'])->name('admin.editBuku');
    Route::post('/postEditBuku/{id}', [AdminController::class, 'postEditBuku'])->name('postEditBuku');
    Route::get('/admin/deleteBuku/{id}', [AdminController::class, 'deleteBuku'])->name('admin.deleteBuku');
    
    Route::get('/admin/peminjaman', [AdminController::class, 'adminPeminjaman'])->name('admin.peminjaman');
    Route::get('/admin/tambahPeminjaman', [AdminController::class, 'tambahPeminjaman'])->name('admin.tambahPeminjaman');
    Route::post('/postTambahPeminjaman', [AdminController::class, 'postTambahPeminjaman'])->name('postTambahPeminjaman');
    Route::get('/admin/editPeminjaman/{id}', [AdminController::class, 'editPeminjaman'])->name('admin.editPeminjaman');
    Route::post('/postEditPeminjaman/{id}', [AdminController::class, 'postEditPeminjaman'])->name('postEditPeminjaman');
    Route::get('/admin/deletePeminjaman/{id}', [AdminController::class, 'deletePeminjaman'])->name('admin.deletePeminjaman');
    Route::get('/admin/detailPeminjaman/{id}/{id_user}/{id_buku}', [AdminController::class, 'detailPeminjaman'])->name('admin.detailPeminjaman');
    Route::get('/admin/cetakPeminjaman', [AdminController::class,'cetakDataPeminjaman'])->name('admin.cetakDataPeminjaman');
    Route::delete('/admin/deleteBerita/{id}', [AdminController::class, 'deleteBerita'])->name('deleteBerita');
    Route::delete('/admin/deleteDosen/{id}', [AdminController::class, 'deleteDosen'])->name('deleteDosen');
    Route::post('/postInputBerita', [AdminController::class, 'postInputBerita'])->name('postInputBerita');
    Route::get('/admin/edit-dosen/{id}', [AdminController::class, 'editDosen'])->name('admin.editDosen');
    Route::put('/admin/update-dosen/{id}', [AdminController::class, 'updateDosen'])->name('admin.updateDosen');
    

    Route::get('/maps', function () {
        return view('maps');
    });
    
    Route::get('/admin/inputDosen', [AdminController::class, 'inputDosen'])->name('admin.inputDosen');
    Route::post('/postTambahDosen', [AdminController::class, 'postTambahDosen'])->name('postTambahDosen');
});
Route::get('/admin/berita', [AdminController::class, 'berita'])->name('admin.berita');
Route::get('/admin/inputBerita', [AdminController::class, 'inputBerita'])->name('admin.inputBerita');
Route::get('/admin/inputDosen', [AdminController::class, 'inputDosen'])->name('admin.inputDosen');
Route::get('/prodi', [HomeController::class, 'prodi'])->name('prodi');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/biodata', [HomeController::class, 'biodata'])->name('biodata');
Route::get('/admin/dosen', [AdminController::class, 'dosen'])->name('admin.dosen');
Route::post('/admin/dosen', [AdminController::class, 'PostDosen'])->name('dosen.post');
Route::post('/admin/inputDosen', [AdminController::class, 'inputDosen'])->name('admin.inputDosen');


///Route::get('/user/home', [HomeController::class, 'home'])->name('user.home');


Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
