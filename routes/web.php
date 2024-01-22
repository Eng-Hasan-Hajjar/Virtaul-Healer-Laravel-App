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


use App\Http\Controllers\DepartementController;

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
    Route::resource('departements', DepartementController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/allquestions', [QuestionBackController::class,function(){
        return view('doctor.crudquestions.allquestions');
    }])->name('allquestions');
    Route::get('/departments', [DepartmentController::class, 'departmentswiper'])->name('departments.departmentswiper');

    Route::get('/questionsBack', [QuestionBackController::class, 'index2'])->name('questionsBack.index2');
    Route::post('/questions/submitBack', [QuestionBackController::class, 'submitBack'])->name('questions.submitBack');

    Route::get('/questionsLung', [QuestionLungController::class, 'index2'])->name('questionsLung.index2');
    Route::post('/questions/submitLung', [QuestionLungController::class, 'submitLung'])->name('questions.submitLung');

    Route::get('/questionsHeart', [QuestionHeartController::class, 'index2'])->name('questionsHeart.index2');
    Route::post('/questions/submitHeart', [QuestionHeartController::class, 'submitHeart'])->name('questions.submitHeart');

    Route::get('/questionsBrain', [QuestionBrainController::class, 'index2'])->name('questionsBrain.index2');
    Route::post('/questions/submitBrain', [QuestionBrainController::class, 'submitBrain'])->name('questions.submitBrain');

    Route::get('/questionsEye', [QuestionEyeController::class, 'index2'])->name('questionsEye.index2');
    Route::post('/questions/submitEye', [QuestionEyeController::class, 'submitEye'])->name('questions.submitEye');

    Route::get('/questionsIntestines', [QuestionIntestinesController::class, 'index2'])->name('questionsIntestines.index2');
    Route::post('/questions/submitIntestines', [QuestionIntestinesController::class, 'submitIntestines'])->name('questions.submitIntestines');

    Route::get('/questionsKidney', [QuestionKidneyController::class, 'index2'])->name('questionsKidney.index2');
    Route::post('/questions/submitKidney', [QuestionKidneyController::class, 'submitKidney'])->name('questions.submitKidney');

    Route::get('/questionsPharynx', [QuestionPharynxController::class, 'index2'])->name('questionsPharynx.index2');
    Route::post('/questions/submitPharynx', [QuestionPharynxController::class, 'submitPharynx'])->name('questions.submitPharynx');

    Route::get('/questionsStomach', [QuestionStomachController::class, 'index2'])->name('questionsStomach.index2');
    Route::post('/questions/submitStomach', [QuestionStomachController::class, 'submitStomach'])->name('questions.submitStomach');

    Route::get('/questionsEar', [QuestionEarController::class, 'index2'])->name('questionsEar.index2');
    Route::post('/questions/submitEar', [QuestionEarController::class, 'submitEar'])->name('questions.submitEar');

    Route::get('/questions', [QuestionController::class, 'index'])->name('questions.index');

    Route::post('/questions/submit', [QuestionController::class, 'submit'])->name('questions.submit');

    Route::resource('questionsBack', QuestionBackController::class);

    Route::resource('questionsLung', QuestionLungController::class);

    Route::resource('questionsHeart', QuestionHeartController::class);

    Route::resource('questionsBrain', QuestionBrainController::class);

    Route::resource('questionsEye', QuestionEyeController::class);

    Route::resource('questionsIntestines', QuestionIntestinesController::class);

    Route::resource('questionsKidney', QuestionKidneyController::class);

    Route::resource('questionsPharynx', QuestionPharynxController::class);

    Route::resource('questionsStomach', QuestionStomachController::class);

    Route::resource('questionsEar', QuestionEarController::class);



});
