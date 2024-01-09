<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionBackController;
use App\Http\Controllers\QuestionLungController;
use App\Http\Controllers\QuestionHeartController;
use App\Http\Controllers\QuestionEarController;

use App\Http\Controllers\QuestionIntestinesController;
use App\Http\Controllers\QuestionKidneyController;
use App\Http\Controllers\QuestionPharynxController;
use App\Http\Controllers\QuestionStomachController;
use App\Http\Controllers\QuestionEyeController;
use App\Http\Controllers\QuestionBrainController;

use App\Http\Controllers\DepartmentController;
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
    return view('home');
});
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware('auth')->group(function () {

    Route::get('/departments', [DepartmentController::class, 'departmentswiper'])->name('departments.departmentswiper');

    Route::get('/questionsBack', [QuestionBackController::class, 'index'])->name('questionsBack.index');
    Route::post('/questions/submitBack', [QuestionBackController::class, 'submitBack'])->name('questions.submitBack');

    Route::get('/questionsLung', [QuestionLungController::class, 'index'])->name('questionsLung.index');
    Route::post('/questions/submitLung', [QuestionLungController::class, 'submitLung'])->name('questions.submitLung');

    Route::get('/questionsHeart', [QuestionHeartController::class, 'index'])->name('questionsHeart.index');
    Route::post('/questions/submitHeart', [QuestionHeartController::class, 'submitHeart'])->name('questions.submitHeart');

    Route::get('/questionsBrain', [QuestionBrainController::class, 'index'])->name('questionsBrain.index');
    Route::post('/questions/submitBrain', [QuestionBrainController::class, 'submitBrain'])->name('questions.submitBrain');

    Route::get('/questionsEye', [QuestionEyeController::class, 'index'])->name('questionsEye.index');
    Route::post('/questions/submitEye', [QuestionEyeController::class, 'submitEye'])->name('questions.submitEye');

    Route::get('/questionsIntestines', [QuestionIntestinesController::class, 'index'])->name('questionsIntestines.index');
    Route::post('/questions/submitIntestines', [QuestionIntestinesController::class, 'submitIntestines'])->name('questions.submitIntestines');

    Route::get('/questionsKidney', [QuestionKidneyController::class, 'index'])->name('questionsKidney.index');
    Route::post('/questions/submitKidney', [QuestionKidneyController::class, 'submitKidney'])->name('questions.submitKidney');

    Route::get('/questionsPharynx', [QuestionPharynxController::class, 'index'])->name('questionsPharynx.index');
    Route::post('/questions/submitPharynx', [QuestionPharynxController::class, 'submitPharynx'])->name('questions.submitPharynx');

    Route::get('/questionsStomach', [QuestionStomachController::class, 'index'])->name('questionsStomach.index');
    Route::post('/questions/submitStomach', [QuestionStomachController::class, 'submitStomach'])->name('questions.submitStomach');

    Route::get('/questionsEar', [QuestionEarController::class, 'index'])->name('questionsEar.index');
    Route::post('/questions/submitEar', [QuestionEarController::class, 'submitEar'])->name('questions.submitEar');

    Route::get('/questions', [QuestionController::class, 'index'])->name('questions.index');

    Route::post('/questions/submit', [QuestionController::class, 'submit'])->name('questions.submit');

});
