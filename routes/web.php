<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\hom;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\MealPlanController;
use App\Models\meal_plan;

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



// Route::post('/post-test', function (Request $request) {
//     dd(request());
// });


Route::get("/",[homecontroller::class,"index"]);

Route::get("/home",function(){
    return view('home');
});

Route::get("/contact",function(){
    return view('pages.contact');
});

Route::get("/menu",function(){
    return view('pages.menu');
});

Route::get("/sub",function(){
    return view('pages.subscription');
});

Route::get("/info",function(){
    return view('pages.info');
});

Route::get("/summery",function(){
    return view('pages.summery');
});

Route::get("/smenu",function(){
    return view('pages.select-menu');
});

Route::get("select-menu",function(){
    return view('pages.menu-select');
});

Route::get("order-complete",function(){
    return view('pages.order-complete');
});








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
       return view('dashboard');
    })->name('dashboard');

    Route::resource('products', \App\Http\Controllers\ProductsController::class);
    Route::resource('user', \App\Http\Controllers\Usercontroller::class);
    Route::resource('recipe', \App\Http\Controllers\RecipeController::class);
    // Route::post('/meal-plans', [MealPlanController::class, 'store']);
    Route::resource('meal_plan', \App\Http\Controllers\MealPlanController::class);

    Route::post('/meal-plans',function(){
        $mealplan = new meal_plan();
        $mealplan->name = request('name');
        $mealplan->address = request('address');
        $mealplan->email = request('email');
        $mealplan->city = request('city');
        $mealplan->state = request('state');
        $mealplan->zip = request('zip');
        $mealplan->First_delivery_on = request('first_delivery_date');
        $mealplan->time = request('time');
        $mealplan->save();

        return redirect('/summery');
});

});
