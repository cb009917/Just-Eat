<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\hom;
use App\Http\Controllers\BaseController;
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


/**
 * Administration routes
 */

Route::group(['prefix' => 'admin'], function () {

    /**
     * Authentication routes
     */
    Route::group(['prefix' => 'auth'], function (){

        // user resource route
        Route::resource('users', BaseController::class);

        // roles and permission resource route
        Route::resource('roles', BaseController::class);
        Route::resource('permissions', BaseController::class);



    });

    /**
     * Product routes
     */
    Route::group(['prefix' => 'product'], function () {

        // product resource route
        Route::resource('products', BaseController::class);

        // product category resource route
        Route::resource('categorys', BaseController::class);

        //Seasonal product resource route
        Route::resource('seasonals', BaseController::class);

    });

    // Support
    Route::resource('supports', BaseController::class);

    /**
     * Analytic routes
     */
    Route::group(['prefix' => 'analytic'], function () {

       //@todo add analytic routes

    });

    /**
     * order routes
     */
    Route::group(['prefix' => 'order'], function () {

        // order resource route
        Route::resource('orders', BaseController::class);

        // delivery and customer resource route
        Route::resource('deliverys', BaseController::class);
    });



    Route::get("/",function(Request $request){
        return "yo admin";
    });
});


/**
 * User routes
 */
Route::group(['prefix' => 'user'], function () {


    //subscription route
    Route::resource('subscriptions', BaseController::class);

    //review route
    Route::resource('reviews', BaseController::class);

    //Delivery tracking route
    Route::resource('deliveries', BaseController::class);

    //notification route
    Route::resource('notifications', BaseController::class);


});








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
