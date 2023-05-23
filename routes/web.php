<?php

use App\Http\Controllers\DemoResourceController;
use App\Http\Controllers\DemoSingleActionController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

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

Route::get('/index/{id?}', function ($id = null) {
    $userName = "Saad";
    $data = compact('id', 'userName');
    return view('index')->with($data);
});

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/form', function () {
//     return view('form');
// });

Route::get(
    '/form',
    [FormController::class, 'getForm']
);
Route::post(
    '/form',
    [FormController::class, 'getData']
);


Route::get(
    '/form/edit',
    [FormController::class, 'edit']
);


Route::get(
    '/sa',
    DemoSingleActionController::class
);


Route::resource(
    'image',
    DemoResourceController::class

);
Route::get(
    '/show',
    [FormController::class, 'show']
);
Route::get(
    '/edit/{id}',
    [FormController::class, 'edit']
);
Route::post(
    '/update',
    [FormController::class, 'update']
);

Route::get(
    '/delete/{id}',
    [FormController::class, 'delete']
);