<?php

use App\Http\Controllers\RedirectsController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

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



// Route::get('/dashboard',function(){
//     return view('home');
// });

route::get('/',[RedirectsController::class,'index']);

route::get('/home',[RedirectsController::class,'home']);

route::get('/flights',[RedirectsController::class,'flights']);

route::get('/hotel',[RedirectsController::class,'hotel']);

route::get('/car',[RedirectsController::class,'car']);

route::get('/cart',[RedirectsController::class,'cart']);

route::get('/login',[RedirectsController::class,'login']);

route::get('/register',[RedirectsController::class,'register']);

route::get('/user',[RedirectsController::class,'user']); // blm di buat

// Route::get('/home',function(){
//     return view('home',[
//         "title" => "Home"
//     ]);
// });

// Route::get('/hotel',function(){
//     return view('hotel',[
//         "title" => "Hotel"
//     ]);
// });

// Route::get('/flights',function(){
//     return view('flights',[
//         "title" => "Flights"
//     ]);
// });

// Route::get('/car',function(){
//     return view('car',[
//         "title" => "Car"
//     ]);
// });

// Route::get('/register',function(){
//     return view('register',[
//         "title" => "register"
//     ]);
// });

// Route::get('/login',function(){
//     return view('login');
// });


// Route::get('/register', function () {
//     return view('/register');
// })->middleware(['auth'])->name('dashboard');
// require __DIR__.'/auth.php';

