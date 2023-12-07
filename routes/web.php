<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\DnewsController;
use App\Http\Controllers\InfaqController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\settinguser;

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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/',[homepageController::class,'index'])->name('homepage');
Route::get('/news',[homepageController::class,'news']);
Route::get('/news/{news:title}',[homepageController::class,'detail']);
Route::get('/aboutus',[homepageController::class,'aboutus']);
Route::get('/contactus',[homepageController::class,'contactus']);

Route::group(['middleware'=>['guest']],function(){
    Route::get('/login',[loginController::class,'showLoginForm'])->name('login');
    Route::post('/login',[loginController::class,'authenticated']);
});

Route::group(['middleware'=>['auth']],function(){
    Route::post('/logout',[loginController::class,'logout']);
    Route::get('/dashboard',[dashboard::class,'index']);
    // Route::get('/dashboard', function () {
    //     return view('dashboard.page.dashboard');
    // });
    Route::get('/dashboard/setting',[settinguser::class,'index'])->name('setting');
    Route::put('/dashboard/setting/',[settinguser::class,'update'])->name('updatepassword');

    Route::group(['middleware'=>['not_siswa']],function(){
        Route::resource('/dashboard/siswa', SiswaController::class);
        Route::resource('/dashboard/user', userController::class);

        Route::resource('/dashboard/news', DnewsController::class);
        Route::resource('/dashboard/category', CategoriesController::class);

        Route::resource('/dashboard/jadwal', JadwalController::class);
        Route::resource('/dashboard/infaq', InfaqController::class);
        Route::put('/dashboard/infaq/pay/{id}',[InfaqController::class,'updatepaymentinfaq'])->name('paymentinfaq');
        Route::resource('/dashboard/kelas', KelasController::class);

        Route::POST('/dashboard/kelas/addsiswakelas', [KelasController::class,'addsiswakelas'])->name('addsiswakelas');
        Route::POST('/dashboard/kelas/deletesiswakelas', [KelasController::class,'deletesiswakelas'])->name('deletesiswakelas');

    });
});

