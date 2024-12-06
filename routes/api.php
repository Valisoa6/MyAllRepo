<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\PauseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\PointageController;
use App\Http\Controllers\LoginController;



Route::post('/register', [LoginController::class, 'register']);


//routes pour les absences
Route::get('/absences', [AbsenceController::class, 'findAll']);
Route::post('/store-absence', [AbsenceController::class, 'store']);
Route::put('/absences-update/{id}', [AbsenceController::class, 'update']);
Route::delete('/absences-delete/{id}', [AbsenceController::class, 'delete']);
Route::get('/absences-employe', [AbsenceController::class, 'updateEmployesAbsence']);
Route::get('/absences-search/{date_absent}', [AbsenceController::class, 'Search']);
////routes pour les coge
Route::get('/conges', [CongeController::class, 'findAll']);
Route::post('/conges-store', [CongeController::class, 'store']);
Route::put('/conges-update/{id}', [CongeController::class, 'update']);
Route::delete('/conges-delete/{id}', [CongeController::class, 'delete']);
Route::get('/conges/{id}/duree', [CongeController::class, 'calculateDuration']);
Route::post('/obtenir-fin-mois', [CongeController::class, 'obtenirFinMois']);
Route::post('/est-ouvrable', [CongeController::class, 'estOuvrable']);
Route::post('/compter-jours-ouvrables', [CongeController::class, 'compterJoursOuvrables']);
//routes pour les employe
Route::get('/employes', [EmployeController::class, 'findAll']);
Route::post('/employes', [EmployeController::class, 'storePost']);
Route::get('/employes/with-conges', [EmployeController::class, 'findWithConges']);
Route::get('/employes/with-pauses', [EmployeController::class, 'findWithPauses']);
Route::get('/employes/with-absences', [EmployeController::class, 'findWithAbsences']);
Route::get('/employes/with-pointages', [EmployeController::class, 'findWithPointages']);
Route::get('/employes/with-relations', [EmployeController::class, 'findWithAllRelations']);
Route::put('/employes', [EmployeController::class, 'store']);
Route::put('/employes-update/{id}', [EmployeController::class, 'update']);
Route::delete('/employes/{id}', [EmployeController::class, 'destroy']);
Route::get('/employe-search/{nom}', [EmployeController::class, 'Search']);
//
//routes pour les pause
Route::get('/pauses', [PauseController::class, 'findAll']);
Route::post('/pauses-store', [PauseController::class, 'store']);
Route::put('/pauses-update', [PauseController::class, 'update']);
Route::delete('/pauses-delete', [PauseController::class, 'delete']);

//routes pour les pointage
Route::get('/pointages/permonth', [EmployeController::class, 'findWithPointageInterval']);
Route::get('/pointages', [PointageController::class, 'findAll']);
Route::post('/pointages-store', [PointageController::class, 'store']);
Route::put('/pointages-update/{id}', [PointageController::class, 'updatee']);
Route::delete('/pointages-delete/{id}', [PointageController::class, 'delete']);
Route::post('employes/{employeId}/verifier-pointage-et-absence',[PointageController::class,'verifierPointageEtAbsence']);
Route::post('/duration', [CongeController::class, 'calculateDuration']);
Route::post('/duration/hour', [PointageController::class, 'calculateDuration']);
Route::post('/calculer-duree', [PointageController::class, 'calculerDuree']);
Route::get('/obtenir-nom-jour', [PointageController::class, 'obtenirNomJour']);
Route::post('/obtenir-some-heures', [PointageController::class, 'calculerSommeHeures']);

//routes pour les users
Route::get('/users', [UserController::class, 'findAll']);
Route::post('/userss', [UserController::class, 'store']);
Route::put('/users-update/{id}', [UserController::class, 'update']);
Route::delete('/users-delete/{id}', [UserController::class, 'delete']);
Route::get('/users-search/{id}', [UserController::class, 'Search']);
//Auth



// app/Http/Controllers/AuthController.php



