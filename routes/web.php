<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\manageData;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(['middleware'=>['authAccess']], function(){
    Route::view('/', 'index')->name('dashboard');
    Route::get('make', [manageData::class, 'allMakeData'])->name('allMakeData');
    Route::get('modal', [manageData::class, 'allModalData'])->name('allModalData');
    Route::get('generation', [manageData::class, 'allGenData'])->name('allGenData');
    Route::get('engine', [manageData::class, 'allEngineData'])->name('allEngineData');
    Route::get('all-data', [manageData::class, 'allDataData'])->name('allDataData');
    Route::get('export-data', [manageData::class, 'exportData'])->name('exportData');
    Route::get('export-enginedata', [manageData::class, 'exportEngineData'])->name('exportEngineData');
    Route::get('export-makedata', [manageData::class, 'exportMakeData'])->name('exportMakeData');
    Route::get('export-modaldata', [manageData::class, 'exportModalData'])->name('exportModalData');
    Route::get('export-generationdata', [manageData::class, 'exportGenData'])->name('exportGenData');
    Route::delete('delete-data', [manageData::class, 'deleteData'])->name('deleteData');
    Route::delete('delete-engine', [manageData::class, 'deleteEngine'])->name('deleteEngine');
    Route::delete('delete-gen', [manageData::class, 'deleteGen'])->name('deleteGen');
    Route::delete('delete-make', [manageData::class, 'deleteMake'])->name('deleteMake');
    Route::delete('delete-modal', [manageData::class, 'deleteModal'])->name('deleteModal');

    
    Route::get('all-admins', [manageData::class, 'allAdmins'])->name('allAdmins');
    Route::get('add-admins', [manageData::class, 'addAdmins'])->name('addAdmins');
    Route::post('store', [manageData::class, 'storeUser'])->name('storeUser');
    Route::delete('delete-user', [manageData::class, 'deleteUser'])->name('deleteUser');
    Route::get('export-users', [manageData::class, 'exportUesrs'])->name('exportUesrs');

    Route::get('profile', [manageData::class, 'profileEdit'])->name('profileEdit');
    Route::post('update-profile', [manageData::class, 'updateProfile'])->name('updateProfile');
    
});


require __DIR__.'/auth.php';
