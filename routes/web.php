<?php

use App\Http\Controllers\Admin\SettingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\TelegramController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/service', [HomeController::class, 'services'])->name('services');

});
Route::post('/contact/sendToTg', [TelegramController::class, 'sendToTg'])->name('contact.send');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::resources([
        'admin/settings' => SettingsController::class,
    ]);
// Route::post('/admin1/category/upload', [CategoriesController::class, 'upload'])->name('admin1.category.upload');
});



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
