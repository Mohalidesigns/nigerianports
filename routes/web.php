<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\NpaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->middleware(['auth'])->group(function() {

    Route::resource('permission', PermissionController::class);
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);

    Route::get('edit-account-info',[UserController::class,'profileInformation'])->name('admin.profile.info');
    Route::post('edit-account-info',[UserController::class,'profileInformationStore'])->name('admin.profile.info.store');
    Route::post('change-password',[UserController::class,'changePasswordStore'])->name('admin.profile.password.store');
});

require __DIR__.'/auth.php';


Route::get('/truck/thanks', function () {
    return view('truck.thanks');
});

Route::get('/truck/thanks', function () {
    return view('truck.thanks');
});

Route::get('/search', function () {
    return view('search');
});



// Route::get('/npas/index', [NpaController::class, 'index'])->name('npas.index');
// Route::get('/npas/create', [NpaController::class, 'create'])->name('npas.create');
// Route::get('/npas/edit/{id}', [NpaController::class, 'edit'])->name('npas.edit');
// Route::put('/npas/update/{id}', [NpaController::class, 'update'])->name('npas.update');
// Route::get('/npas/show/{id}', [NpaController::class, 'show'])->name('npas.show');
// Route::post('/npas/store', [NpaController::class, 'store'])->name('npas.store');
// Route::delete('/npas/destroy/{id}', [NpaController::class, 'destroy'])->name('npas.destroy');



Route::get('/npas/index', [App\Http\Controllers\NpaController::class, 'index'])->name('npas.index');
Route::get('/npas/create', [App\Http\Controllers\NpaController::class, 'create'])->name('npas.create');
Route::get('/npas/edit/{id}', [App\Http\Controllers\NpaController::class, 'edit'])->name('npas.edit');
Route::put('/npas/update/{id}', [App\Http\Controllers\NpaController::class, 'update'])->name('npas.update');
Route::get('/npas/show/{id}', [App\Http\Controllers\NpaController::class, 'show'])->name('npas.show');
Route::post('/npas/store', [App\Http\Controllers\NpaController::class, 'store'])->name('npas.store');
Route::delete('/npas/destroy/{id}', [App\Http\Controllers\NpaController::class, 'destroy'])->name('npas.destroy');
Route::get('/npas/search', [App\Http\Controllers\NpaController::class, 'search'])->name('search');


Route::get('/truck/index', [App\Http\Controllers\TruckController::class, 'index'])->name('truck.index');
Route::get('/truck/create', [App\Http\Controllers\TruckController::class, 'create'])->name('truck.create');
Route::get('/truck/edit/{id}', [App\Http\Controllers\TruckController::class, 'edit'])->name('truck.edit');
Route::put('/truck/update/{id}', [App\Http\Controllers\TruckController::class, 'update'])->name('truck.update');
Route::get('/truck/show/{id}', [App\Http\Controllers\TruckController::class, 'show'])->name('truck.show');
Route::post('/truck/store', [App\Http\Controllers\TruckController::class, 'store'])->name('truck.store');
Route::delete('/truck/destroy/{id}', [App\Http\Controllers\TruckController::class, 'destroy'])->name('truck.destroy');


Route::get('qr-code', function () {

    return QrCode::size(500)->generate('Welcome to kerneldev.com!');
});

Route::get('qr-code-g', function () {
  \QrCode::size(500)
            ->format('png')
            ->generate('npacode', public_path('images/qrcode.png'));

  return view('npacode');

});


