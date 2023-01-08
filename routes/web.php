<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HRController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResourceController;

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

Route::get('/', [FormController::class, 'create'])->name('welcome');
// Route::post('/hr', [FormController::class, 'store']);
Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::middleware([
//     'auth:sanctum',
//     'verified',
//     'role:admin'
// ])->prefix('admin')->name('admin.')->group(function () {


//     Route::get('/', function () {
//         // return Inertia::render('Admin/Index');
//     })->name('index');



Route::resource('/hr', FormController::class);

// Route::resource('/hr', Controller::class);
Route::get('/resource/add/{id}', [ResourceController::class, 'createhr'])->name('addHr');
Route::resource('/resource', ResourceController::class);
Route::post('/resource/add/{id}', [ResourceController::class, 'storeRestore'])->name('addHrPost');



// Route::post('/laboratoryEquipment/status/change', [LaboratoryEquipmentController::class, 'changeStatus'])->name("change_status");

require __DIR__ . '/auth.php';
