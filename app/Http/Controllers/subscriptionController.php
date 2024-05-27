<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class subscriptionController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        $mealplan = new Subscription();
        $mealplan->delivery_address = request('address');
        $mealplan->city = request('city');
        $mealplan->zip = request('zip');
        $mealplan->delivery_time = request('time');
        $mealplan->subscription_period = request('delivery-method');
        $mealplan->user_id   = Auth()->user()->id;
        $mealplan->save();


        session(['period' => request('delivery-method')]);

        return redirect()->route('/summery');
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}