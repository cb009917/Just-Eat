<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\hom;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\MealPlanController;
use App\Models\meal_plan;
use App\Livewire\PriceCalculator;

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

Route::get('price-calculator',priceCalculator::class);

Route::get("/",[homecontroller::class,"index"]);

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
        Route::resource('products', \App\Http\Controllers\ProductsController::class);

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
    Route::resource('subscriptions', \App\Http\Controllers\subscriptionController::class);

    //review route
    Route::resource('reviews', BaseController::class);

    //Delivery tracking route
    Route::resource('deliveries', BaseController::class);

    //notification route
    Route::resource('notifications', BaseController::class);

    Route::get("subscription",function(){
        return view('pages.subscription');
    })->name('/subscription');

    Route::get("subscription/user-information",function(){
        return view('pages.info');
    });

    Route::get("subscription/summery",function(){
        return view('pages.summery');
    })->name('/summery');



    Route::post("subscription/summery",function(){
        return view('pages.summery');
    });


    Route::get("subscription/select-menu/{preference}",[\App\Http\Controllers\ProductsController::class, "show_dish"]);



    Route::get("subscription/order-complete",[\App\Http\Controllers\ProductsController::class,'order_complete'])->name('/order_complete');;



});
Route::get("menu",[\App\Http\Controllers\ProductsController::class,"show_product"]);


Route::get('add_to_cart/{id}',[\App\Http\Controllers\ProductsController::class,"addtocart"])->name('add_to_cart');
Route::post('add/{id}',[\App\Http\Controllers\ProductsController::class,"add"])->name('add');
Route::get('cart',[\App\Http\Controllers\ProductsController::class,"cart"])->name('cart');
Route::get('/checkout', [\App\Http\Controllers\Stripecontroller::class, "checkout"])->name('checkout');

Route::get("/contact",function(){
    return view('pages.contact');
});





Route::get("/smenu",function(){
    return view('pages.select-menu');
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
     //Route::post('meal-plans', [MealPlanController::class, 'store']);
    Route::resource('meal_plan', \App\Http\Controllers\MealPlanController::class);

//    Route::post('/meal-plans',function(){
//        $mealplan = new meal_plan();
//        $mealplan->name = request('name');
//        $mealplan->address = request('address');
//        $mealplan->email = request('email');
//        $mealplan->city = request('city');
//        $mealplan->state = request('state');
//        $mealplan->zip = request('zip');
//        $mealplan->First_delivery_on = request('first_delivery_date');
//        $mealplan->time = request('time');
//        $mealplan->save();
//
//        return redirect('/summery');
//});

});


// get all the users from the users tabel
Route::middleware(['role:admin'])->get('/dev', function (Request $request) {
    $users = DB::table('users')->get();

    $products = \App\Models\products::first();

    //create a cart
    $cart = \App\Models\cart::create([
        'user_id' => 1,
        'item_count' => 1,
        'total' => 0,
        'tax' => 0,
        'is_paid' => 1,
    ]);
    //add product to cart
    $cart->products()->attach($products,
        ['quantity' => 1,
            'price' => $products->price,

            'tax' => 0,
        ]);


    dd($products, $cart);
    return 'yo dev';
});
