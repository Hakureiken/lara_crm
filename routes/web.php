<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ReservationsController;

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

Route::get('/',function ()
{
    return view('welcome');
});

// Route::get('/contacts', [ContactsController::class, 'index']) -> name('contacts.index');

// Route::post('/contacts', [ContactsController::class, 'store']) -> name('contacts.store');

// Route::get('/contacts/create', [ContactsController::class, 'create']) -> name('contacts.create');

// Route::get('/contacts/{contacts}/edit', [ContactsController::class, 'edit']) -> name('contacts.edit');

// Route::get('/contacts/{contacts}/update', [ContactsController::class, 'update']) -> name('contacts.update');

// Route::delete('/contacts/{contacts}', [ContactsController::class, 'destroy']) -> name('contacts.destroy');

// Route::get('/contacts/{contacts}', [ContactsController::class, 'show']) -> name('contacts.show');



// Route::get('/contacts/{contact}/delete', [ContactsController::class, 'delete']) -> name('contacts.delete');

Route::resource("contacts",ContactsController::class);

Route::resource("companies",CompaniesController::class);

Route::resource("rooms",RoomsController::class);

Route::resource("reservations",ReservationsController::class);


