<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\DashboardController;
 
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
    return view('welcome');
})->name('welcome');

Route::get('/',[ItemsController::class,'ShowItemGroup'])->name('welcome');

Route::get('/showproduct/{id}',[ItemsController::class,'Showproduct'])->name('showproduct');
Route::get('/addtocart/{id}',[ItemsController::class,'AddtoCart'])->name('addtocart');
Route::get('/checkout',[ItemsController::class,'Checkout'])->name('checkout')->middleware('auth');


Route::get('/cpanel',[DashboardController::class,'DisplayItems'])->name('controlpanel')->middleware('auth');
Route::get('/addgritem',[DashboardController::class,'displayadditemsgroup'])->name('addgritem')->middleware('auth');
Route::get('/additem',[DashboardController::class,'displayadditems'])->name('additem')->middleware('auth');

Route::get('/itemgroup',[ItemsController::class,'GetItemgroup'])->name('itemgroup');
Route::post('/save', [ItemsController::class,'SaveGroupsItems'])->name('save');

Route::get('/del/{x}', [ItemsController::class,'del'])->name('del');
Route::get('/edit/{x}', [ItemsController::class,'edit'])->name('edit');
Route::post('/update', [ItemsController::class,'Update'])->name('update');





Route::get('/items', [ItemsController::class,'GetItems'])->name('items');
Route::post('/save-items', [ItemsController::class,'SaveItems'])->name('save-items');
Route::get('/delete/{x}', [ItemsController::class,'delete'])->name('delete');
Route::get('/edit-item/{x}', [ItemsController::class,'editItem'])->name('edit-item');
Route::post('/update-items', [ItemsController::class,'UpdateItems'])->name('update-items');


Auth::routes();

Route::get('/home',[App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::get('/logout',[DashboardController::class,'logout'])->name('logout');


