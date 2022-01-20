<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('login', function () {
    return view('login');
});
Route::get('registration', function () {
    return view('registration');
});
//Route For Admin Login Page
Route::get('admin', function () {
    return view('admin');
});

// Route For Admin Login
Route::post("admin",[UserController::class,'admin']);

//Route For Admin Page
Route::get('admin/admin-page', function () {
    return view('admin-page');
});
//Route To View Admin Insert Page
Route::get('admin/admin-insert', function () {
    return view('admin-insert');
});

Route::get('admin/adminUpdate', function () {
    return view('admin-update');
});

Route::post('admin/admin-update',[ProductController::class,'whichToUpdate']);

//Route To update via Admin  Page
Route::post("admin/updating",[ProductController::class,'adminUpdate']);
//Route To add via Admin Insert Page
Route::post("admin/admin-insert",[ProductController::class,'adminInsert']);

//Route To add via Admin Insert Page
Route::post("admin/admin-delete",[ProductController::class,'adminDelete']);

//Route For Profile Page
Route::get('profile', function () {
    return view('profile');
});
// Route For Login
Route::post("login",[UserController::class,'login']);
// Route For Registraion
Route::post("registration",[UserController::class,'registration']);
// Route For Update
Route::post("update",[UserController::class,'update']);
// Route For Home Page
Route::get("admin/admin-page",[ProductController::class,'adminProducts']);
// Route For Cart Page
Route::get("cartlist",[ProductController::class,'cartList']);
// Route For Detail Page
Route::get("detail/{id}",[ProductController::class,'detail']);
// Route For Search Page
Route::get("search",[ProductController::class,'search']);
// Route For Logout
Route::get("logout",[UserController::class,'logout']);
// Route For Add To Cart
Route::post("add_to_cart",[ProductController::class,'addToCart']);
// Route For Detail Page
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
// Route For Order Page
Route::get("order",[ProductController::class,'order']);
// Route To Place Order
Route::post("orderplace",[ProductController::class,'orderplace']);
// Route For Order Page
Route::get("myorders",[ProductController::class,'myorders']);
//Route For Product According To Category
Route::get("{id}",[ProductController::class,'products']);