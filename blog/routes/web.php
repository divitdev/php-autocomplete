<?php

use Illuminate\Support\Facades\Route;


use \App\Http\Controllers\{
   Select2AutocompleteController
};



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

// Route::get('select2', 'Select2AutocompleteController@index');
// Route::get('/select2-autocomplete-ajax', 'Select2AutocompleteController@dataAjax');


Route::get('select2', [Select2AutocompleteController::class, 'index']);
Route::get('/select2-autocomplete-ajax', [Select2AutocompleteController::class, 'dataAjax'])->name('select2-autocomplete-ajax');

Route::get('/', function () {
    return view('welcome');
});
