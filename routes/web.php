<?php


use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/', [pageController::class, 'home'])->name('home');
    Route::get('/home', [pageController::class, 'home'])->name('home');
    Route::get('/record', [pageController::class, 'record'])->name('record');
    Route::get('/searchMachineNumber', [pageController::class, 'searchMachineNumber'])->name('searchMachineNumber');
    Route::get('/searchContractNumber', [pageController::class, 'searchContractNumber'])->name('searchContractNumber');
    Route::get('/searchMachineType', [pageController::class, 'searchMachineType'])->name('searchMachineType');
    Route::get('/search', [pageController::class, 'search'])->name('search');
    Route::get('/edit', [pageController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [pageController::class, 'update'])->name('update');
    Route::get('/show', [pageController::class, 'show'])->name('show');
    Route::get('/result', [pageController::class, 'result'])->name('result');
    Route::post('/store',[pageController::class,'store'])->name('store');
    Route::get('/print',[pageController::class,'print'])->name('print');
    Route::view('register','main.home');
    Route::view('password/reset','main.home');
    Route::get('/contractShow/{id}',[pageController::class,'contract'])->name('contractShow');
});

//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
