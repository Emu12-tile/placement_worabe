<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HRController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\MultiformController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\LowPositionController;
use App\Http\Controllers\PresidentialController;
use App\Http\Controllers\EducationTypeController;
use App\Http\Controllers\EducationLevelController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Choice2Controller;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/try', [FormController::class, 'create'])->name('try');

Route::get('/', [MultiformController::class, 'createStepOne'])->name('multiforms.create-step-one');
Route::post('/', [MultiformController::class, 'postCreateStepOne'])->name('multiforms.create.step.one.post');

Route::get('/steptwo', [MultiformController::class, 'createStepTwo'])->name('multiforms.create.step.two');
Route::post('/steptwo',  [MultiformController::class, 'postCreateStepTwo'])->name('multiforms.create.step.two.post');
Route::get('/stepthree', [MultiformController::class, 'createStepThree'])->name('multiforms.create.step.three');

Route::post('/stepthree', [MultiformController::class, 'postCreateStepThree'])->name('multiforms.create.step.three.post');
Route::get('/experience', [ExperienceController::class, 'create']);
Route::post('/experience', [ExperienceController::class, 'store']);
// Route::get('')

// Route::post('/hr', [FormController::class, 'store']);
// Route::get('/home', function () {
//     return view('home');
    Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware([
    'auth:sanctum',
    'verified',
    'role:admin'
])->group(function () {
    Route::get('/user', [RegisteredUserController::class, 'index'])->name('index');
    Route::get('/add-user', [RegisteredUserController::class, 'crt']);
    Route::post('/user', [RegisteredUserController::class, 'store']);
    Route::get('edit-user/{id}', [RegisteredUserController::class, 'edit']);
    Route::put('update-user/{id}', [RegisteredUserController::class, 'update']);
    Route::get('delete-user/{id}', [RegisteredUserController::class, 'destroy']);





    Route::resource('/admin', AdminController::class);
    Route::resource('/educationlevel', EducationLevelController::class);
    Route::resource('/level', LevelController::class);

    Route::post('/level', [LevelController::class, 'store']);
    Route::post('/educationtype', [EducationTypeController::class, 'store']);
    Route::resource('/educationtype', EducationTypeController::class);
    Route::resource('/position', PositionController::class);
    Route::resource('/choice2', Choice2Controller::class);
    // Route::post('/position', [PositionController::class, 'store']);
    Route::resource('/jobcategory', JobCategoryController::class);
});
// $emu = (DB::table('positions')->where('position_type_id', 1)->first());

// if ($emu->position_type_id == 1) {
Route::middleware([
    'auth:sanctum',
    'verified',
    'role:hr|president',
    // 'role:hr'
])->group(
    function () {
        // if (DB::table('positions')->where('position_type_id', 1)->first()) {

        Route::get('/resource/add/{id}', [ResourceController::class, 'createhr'])->name('addHr');
        Route::resource('/resource', ResourceController::class);
        Route::get('/lowresource', [ResourceController::class, 'index2'])->name('lowresource.lowresource');

        Route::post('/resource/add/{id}', [ResourceController::class, 'storeRestore'])->name('addHrPost');
    }
    //  elseif ($emu->position_type_id == 2) {

    //
    //     }

);


Route::resource('/hr', FormController::class);
Route::get("search", [FormController::class, 'search']);
Route::get('/table', [FormController::class, 'table']);
// Route::get('/hr', [MultiformController::class, 'index']);
//     }
// );
Route::get('/export_pdf/{id}', [MultiformController::class, 'export_pdf'])->name('export_pdf');



Route::get('/evaluation', [PresidentialController::class, 'index'])->name('presidential.index');







require __DIR__ . '/auth.php';
