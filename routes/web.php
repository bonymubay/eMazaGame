<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\contrologenerico;
use Illuminate\Http\Request;


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

Route::get('/', [contrologenerico::class, 'landing']);

Route::get('/generete-token', [contrologenerico::class, 'genereteToken']);




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::post('/oauth-access-tokens', [contrologenerico::class, 'genereteToken'])->name(name: 'voyager.oauth-access-tokens.store');

});

