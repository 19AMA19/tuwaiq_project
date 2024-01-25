<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DashboardController;

Auth::routes();


Route::get('/', [App\Http\Controllers\ItemController::class, 'ShowAllGroup'])->name('welcome');



// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Navigate to pages
Route::get('/groups', [ItemController::class, 'GetItemGroup'])->name('groups');
Route::get('/items', [ItemController::class, 'GetItem'])->name('items');

// Add New Group
Route::post('/addGroup', [ItemController::class, 'AddNewGroup'])->name('addGroup');

// Add New Item
Route::post('/addItem', [ItemController::class, 'AddNewItem'])->name('addItem');

// Delete Group Item
Route::get('/deleteGroup/{id}', [ItemController::class, 'DeleteGroupItem'])->name('deleteGroup');


// Edit Group Item
Route::get('/editGroup/{id}', [ItemController::class, 'EditGroupItem'])->name('editGroup');


// Update Group Item
Route::post('/updateGroup/', [ItemController::class, 'UpdateGroupItem'])->name('updateGroup');


//dashboard
// Route::get('/cpanel', function () {
//     return view('dashboard.controlpannel');
// });

// Show all item
Route::get('/GetAllItem', [DashboardController::class, 'GetAllItem'])->name('GetAllItem');

// Add new Group
Route::get('/AddGroupDashboard', [DashboardController::class, 'AddNewGroupDashboard'])->name('AddGroupDashboard');

// Add new Group
Route::get('/AddNewItemDashboard', [DashboardController::class, 'AddNewItemDashboard'])->name('AddNewItemDashboard');

// Logout 
Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
})->name('logout');


Route::get('/getItemsByGroup/{id}', [ItemController::class, 'getItemsByGroup'])->name('getItemsByGroup');
Route::get('/AddToCart/{id}', [ItemController::class, 'AddToCart'])->name('AddToCart');


Route::get('/checkout', [ItemController::class, 'Checkout'])->name('checkout')->middleware('auth');


// Testing API
Route::get('/TestAPI', [ItemController::class, 'TestAPI'])->name('TestAPI');





