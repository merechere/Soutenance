<?php

use App\Http\Controllers\EmployerControleur;
use App\Http\Controllers\EvaluationControleur;
use App\Http\Controllers\FormateurControleur;
use App\Http\Controllers\FormationControleur;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionsControleur;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    if (Auth::check()) {
        // L'utilisateur est authentifié, redirigez-le vers /dashboard
        return redirect('/dashbord');
    }
    return view('welcome');
});



// OK

Route::get('/dashbord', function () {
    return view('dashbord');
    
})->middleware(['auth', 'verified'])->name('dashbord');

Route::get('/employer.ajout', [EmployerControleur::class, 'index'])->name("employer.ajout");
Route::post('/employer.ajout', [EmployerControleur::class, 'store'])->name("employer.store");
Route::get('/employer.lister', [EmployerControleur::class, 'list'])->name("employer.lister");
Route::get('/employer.edit/{id}', [EmployerControleur::class, 'edit'])->name("employer.edit");
Route::put('/employer.update/{id}',[EmployerControleur::class, 'update'])->name("employer.update");
Route::get('/employer.delete/{id}',[EmployerControleur::class,'destroy'])->name('employer.delete');
//Route::delete('/employe/{id}', 'EmployerController@destroy')->name('employe.destroy');

Route::get('/formateur.ajout', [FormateurControleur::class, 'index'])->name("formateur.ajout");
Route::post('/formateur.ajout', [FormateurControleur::class, 'store'])->name("formateur.store");
Route::get('/formateur.lister', [FormateurControleur::class, 'list'])->name("formateur.lister");
Route::get('/formateur.edit/{id}', [FormateurControleur::class, 'edit'])->name("formateur.edit");
Route::put('/formateur.update/{id}',[FormateurControleur::class, 'update'])->name("formateur.update");
Route::get('/formateur.delete/{id}',[FormateurControleur::class,'destroy'])->name('formateur.delete');


Route::get('/formation.ajout', [FormationControleur::class, 'index'])->name("formation.ajout");
Route::post('/formation.ajout', [FormationControleur::class, 'store'])->name("formation.store");
Route::get('/formation.lister', [FormationControleur::class, 'list'])->name("formation.lister");
Route::get('/formation.edit/{id}', [FormationControleur::class, 'edit'])->name("formation.edit");
Route::put('/formation.update/{id}',[FormationControleur::class, 'update'])->name("formation.update");
Route::get('/formation.delete/{id}',[FormationControleur::class,'destroy'])->name('formation.delete');

Route::get('/sessions.ajout', [SessionsControleur::class, 'index'])->name("sessions.ajout");
Route::post('/sessions.ajout', [SessionsControleur::class, 'store'])->name("sessions.store");
Route::get('/sessions.lister', [SessionsControleur::class, 'list'])->name("sessions.lister");
Route::get('/sessions.edit/{id}', [sessionsControleur::class, 'edit'])->name("sessions.edit");
Route::put('/sessions.update/{id}',[sessionsControleur::class, 'update'])->name("sessions.update");
Route::get('/sessions.delete/{id}',[sessionsControleur::class,'destroy'])->name('sessions.delete');



Route::get('/evaluations.ajout', [EvaluationControleur::class, 'index'])->name("evaluations.ajout");
Route::post('/evaluations.ajout', [EvaluationControleur::class, 'store'])->name("evaluations.store");
Route::get('/evaluations.lister', [EvaluationControleur::class, 'list'])->name("evaluations.lister");
Route::get('/evaluations.edit/{id}', [EvaluationControleur::class, 'edit'])->name("evaluations.edit");
Route::put('/evaluations.update/{id}',[EvaluationControleur::class, 'update'])->name("evaluations.update");
Route::get('/evaluations.delete/{id}',[EvaluationControleur::class,'destroy'])->name('evaluations.delete');



// OK








// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
