<?php

namespace App\Http\Controllers;

use App\Models\meal_plan;
use App\Http\Requests\Storemeal_planRequest;
use App\Http\Requests\Updatemeal_planRequest;

class MealPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.products.index',[
        'meal_plans' => meal_plan::paginate(10),


        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storemeal_planRequest $request)
    {
        $validatedData = $request->validate([
            'first-name' => 'required|max:255',
            'email' => 'required|email',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'zip' => 'required|max:255',
            'contact' => 'required|max:255',
        ]);

        $mealPlan = new meal_plan();
        $mealPlan->first_name = $validatedData['name'];
        $mealPlan->email = $validatedData['email'];
        $mealPlan->city = $validatedData['city'];
        $mealPlan->state = $validatedData['state'];
        $mealPlan->zip = $validatedData['zip'];
        $mealPlan->contact = $validatedData['contact'];
        // Set other fields here
        $mealPlan->save();

        // Redirect or return response
        return redirect()->route('some.route')->with('success', 'Meal plan created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(meal_plan $meal_plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(meal_plan $meal_plan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatemeal_planRequest $request, meal_plan $meal_plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(meal_plan $meal_plan)
    {
        //
    }
}
