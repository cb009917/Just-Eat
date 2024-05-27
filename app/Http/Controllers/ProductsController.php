<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Requests\StoreproductsRequest;
use App\Http\Requests\UpdateproductsRequest;
use App\Models\spatie;
use Illuminate\Http\Request;
use function Laravel\Prompts\select;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          return view('admin.products.index',[
             'products' => product::paginate(5),

         ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {


        return view('admin.products.form',[
            'product' => (new product()),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductsRequest $request)
    {
                 $save = new product();
            $save->name = request('name');
            $save->price = request('price');
            $save->slug = request('name');
            $save->description = request('description');
            $save->category_id = request('category');


//        if(!empty($request->file('image_file'))) {
//            $ext = $request->file('image_file')->getClientOriginalExtension();
//            $file = $request->file('image_file');
//            $filename = request('name') . '.' . $ext;
//            $file->move('upload/productimg/', $filename);
//            $save->image_file = $filename;
//        }

        $spatie = product::find(1);;
        $spatie
            ->addMedia($request->file('image_file'))
            ->toMediaCollection();
            $save->save();



        return redirect()->route('products.index')->with('success', 'Product successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(products $products)
    {
        // return view('admin.products.form',[
        //     'products' => $products,
        // ]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproductsRequest $request, products $products)
    {
        $validated = $request->validated([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',

        ]);

        $products->update($validated);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(products $products)
    {
        $products->delete();
        return redirect()->route('products.index')->with('success', 'Product successfully deleted!');
    }

    public function show_product(){
        $data['products'] = product::get();
        return view('pages.menu', $data);
    }

    public function addtocart($id){
        $product = product::findOrFail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }
        else{
            $cart[$id] = [
                "product_name" => $product->name,
                "image" => $product->imageget(),
                "price"=> $product->price,
                "quantity"=> 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function cart(){
        return view('pages.cart');
    }
public function show_dish($preference){
        $data['dish'] = product::getsingle($preference);
        return view('pages.menu-select', $data);
}

    public function add($id){
        $product = product::findOrFail($id);
        $Mealcart = session()->get('Mealcart', []);

         $Mealcart[$id] = [
                "quantity"=> 1
            ];

        session()->put('Mealcart', $Mealcart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function order_complete(){

        session()->forget('cart');
        return view('pages.order-complete');
    }



}
