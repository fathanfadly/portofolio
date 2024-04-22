<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Aboutme', function () {
    return view('Aboutme');
});
Route::get('/home', [TemplateController::class, 'index']); // Menghubungkan '/main' dengan metode 'home' di TemplateController
Route::get('/Aboutme', [TemplateController::class, 'Aboutme'])->name('Dashbor.Aboutme'); // Menghubungkan '/aboutme' dengan metode 'Aboutme' di TemplateController
Route::get('/Example', [TemplateController::class, 'Example'])->name('Dashbor.Example'); // Menghubungkan '/example' dengan metode 'Example' di TemplateController
Route::get('/Contactme', [TemplateController::class, 'Contactme'])->name('Dashbor.Contactme'); // Menghubungkan '/contact' dengan metode 'Contactme' di TemplateController