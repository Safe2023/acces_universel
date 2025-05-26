<?php

use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\Ajout_formationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubscribController;
use App\Http\Controllers\VisitorController;
use App\Models\Ajout_formation;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cdfvd', function () {
    return view('cdfvd');
});
Route::get('/foot', function () {
    return view('foot');
});

Route::get('/carrousel', function () {
    return view('carrousel');
});

Route::get('/inscription_formation', function () {
    return view('inscription_formation');
});
Route::get('/ajout_formation', function () {
    return view('ajout_formation');
});
Route::get('/menu', function () {
    return view('menu');
});

Route::get('/actualite', function () {
    return view('actualite');
});


Route::get('/contact', [ServiceController::class, 'contact'])->name('contact');
Route::get('/formation', [Ajout_formationController::class, 'search'])->name('search');
Route::get('/apropos', [ServiceController::class, 'apropos'])->name('apropos');
Route::post('/contact', [ServiceController::class, 'envoiedemail'])->name('envoiedemail');
Route::post('/newsletter', [ServiceController::class, 'newsletter'])->name('newsletter.newsletter');


Route::get('/formation_details/{id}', [Ajout_formationController::class, 'formation_details'])->name('formation_details');

Route::get('/ajout_formation', [Ajout_formationController::class, 'create']);
Route::post('/ajout_formation', [Ajout_formationController::class, 'store'])->name('ajout_formation');
Route::get('/modifier_formation/{id}', [Ajout_formationController::class, 'edite'])->name('edite');
Route::put('/modifier_formation/{id}', [Ajout_formationController::class, 'updates'])->name('updates');
Route::delete('/deletes/{id}', [Ajout_formationController::class, 'destroys'])->name('deletes');
Route::get('/tableau', [Ajout_formationController::class, 'tableau'])->name('tableau');
Route::get('/formation/reserver/{id}', [Ajout_formationController::class, 'reserver'])->name('formation.reserver');


Route::get('/', [ActualiteController::class, 'index'])->name('welcom');
Route::get('ajout_actualite', [ActualiteController::class, 'create']);
Route::post('ajout_actualite', [ActualiteController::class, 'store'])->name('ajout_actualite');
Route::get('/table', [ActualiteController::class, 'table'])->name('table');
Route::get('/modifier_actualite/{id}', [ActualiteController::class, 'edit'])->name('edit');
Route::put('/modifier_actualite/{id}', [ActualiteController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [ActualiteController::class, 'destroy'])->name('delete');
Route::get('/actualites', [ActualiteController::class, 'show'])->name('welcome');
Route::get('/detail/{id}', [ActualiteController::class, 'detail'])->name('detail');
Route::get('/actualite', [ActualiteController::class, 'actualite'])->name('actualites');


Route::get("/subscription", [SubscribController::class, 'index'])->name('subscription');
Route::post("/share-notify-all", [SubscribController::class, 'shareAllOnNotify'])->name('notifyAll');
Route::delete("/newsletter-delete/{id}", [SubscribController::class, 'destroy'])->name('new.destroy');

Route::get('/home', [VisitorController::class, 'index'])->name('home');

Auth::routes();


/* {{ route('formation_details', $formation->id) }} */