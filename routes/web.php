<?php
use App\Http\Controllers\RapportController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PauseController;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\PointageController;
use App\Http\Controllers\AjourdHuiController;

Route::get('/', [LoginController::class, 'pagelog'])->name("home");
Route::get('/login', [LoginController::class, 'pagelog'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/absences/{id}', [AbsenceController::class, 'show']);
    Route::get('/users', [UserController::class, "index"])->name("users");
    Route::get('/dashboard', [HomeController::class, 'afficherRapportMensue'])->name("dashboard");
    Route::get('/continue', [PointageController::class, 'findAll']);
    Route::post('/pointages', [PointageController::class, 'store'])->name('pointages.store');
    Route::get('/rapport-pointage', [RapportController::class, 'showReport'])->name('rapport.show');
    Route::get('/rapport/generate', [RapportController::class, 'generateReport'])->name('rapport.generate');
    Route::post('/pointages/{id}/sortie', [PointageController::class, 'sortie'])->name('pointages.sortie');
    Route::get('/pointages/{employeId}', [PointageController::class, 'findAll']);
    Route::post('/pointages/updateStatut/{pointageId}', [PointageController::class, 'updateStatut'])->name('pointages.updateStatut');
    Route::get('/pointages', [PointageController::class, 'findAll']);
    Route::post('/update-absence-matin', [PointageController::class, 'updateAbsenceMatin'])->name('update.absence.matin');
    Route::post('/update-absence-apres-midi', [PointageController::class, 'updateAbsenceApresMidi'])->name('update.absence.apres_midi');
    Route::get('/rapport-mensuel/{mois}', [PointageController::class, 'calculerHeuresMensuelles']);
    Route::get('/somme-heures/{month}', [HomeController::class, 'afficherRapportMensuel']);
    Route::get('/employe/{id}', [EmployeController::class, 'show']);
    Route::put('/employe', [EmployeController::class, 'modifier']);


Route::post('/employes', [EmployeController::class, 'store']);
Route::post('/pointage/{id}/absent', [PointageController::class, 'updateAbsentStatus'])->name('pointage.absent');
// web.php
Route::get('/users', [UserController::class, 'index']);
Route::post('/pointage/users', [UserController::class, 'store'])->name('users.store');
Route::post('/users-update/{id}', [UserController::class, 'update']);
Route::delete('/users-delete/{id}', [UserController::class, 'destroy']);
//Employe
Route::put('/employes', [EmployeController::class, 'index'])->name('employe.index');
Route::post('/employes', [EmployeController::class, 'store'])->name('employe.store');
Route::post('/employes-update/{id}', [EmployeController::class, 'update'])->name('employe.update');
Route::delete('/employes/{id}', [EmployeController::class, 'destroy'])->name('employe.destroy');

// routes/web.php
Route::post('/pointages', [PointageController::class, 'store'])->name('pointages.store');

Route::get('/pointage/duree-totale-mensuelle', [PointageController::class, 'getDureeTotaleParMois']);

// Dans web.php
Route::post('/pointage/save-all', [PointageController::class, 'saveAllPointages'])->name('pointage.saveAll');

Route::post('/save-pointages', [PointageController::class, 'savePointages'])->name('save.pointages');
// routes/web.php
Route::get('/graphique_absences', [HomeController::class, 'afficherGraphiqueAbsences'])->name('afficherGraphiqueAbsences');


//conge
Route::get('/conges', [CongeController::class, 'index'])->name('conges.index');
Route::post('/conges-store', [CongeController::class, 'store'])->name('conges.store');
Route::post('/conge/update/{id}', [CongeController::class, 'update'])->name('conges.update');
Route::delete('/conge/delete/{id}', [CongeController::class, 'destroy'])->name('conges.delete');


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/rapport/export-excel', [RapportController::class, 'exportExcel'])->name('rapport.exportExcel');

Route::post('/ajouterPointage', [PointageController::class, 'ajouterPointage']);


//gestion d'absenc




    // Afficher la liste des absences
    Route::get('/absences', [AbsenceController::class, 'index'])->name('absences.index');

    // Afficher le formulaire pour ajouter une absence
    Route::get('/absences/create', [AbsenceController::class, 'create'])->name('absences.create');

    // Enregistrer une nouvelle absence
    Route::post('/absences', [AbsenceController::class, 'store'])->name('absences.store');

    // Afficher le formulaire pour modifier une absence
    Route::get('/absences/{id}/edit', [AbsenceController::class, 'edit'])->name('absences.edit');
    Route::get('/graph', [HomeController::class, 'showGraph'])->name('show.graph');
    // Mettre à jour une absence existante
    Route::put('/absences/{id}', [AbsenceController::class, 'update'])->name('absences.update');
    Route::resource('employes', EmployeController::class);
    // Supprimer une absence
    Route::delete('/absences/{id}', [AbsenceController::class, 'destroy'])->name('absences.destroy');
});




