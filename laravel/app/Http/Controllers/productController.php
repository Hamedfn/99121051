<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use app\Models\products;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function products ()
    {
        $myProducts = DB::table('products')->get();
        return view('showProducts' , ['products'=>$myProducts]);
    }


    public function compare(Request $request)
    {

        $product1 = $request->input ('product1');
        $product2 = $request->input ('product2');

        return view ('prdct',[
            'product1' => $product1,
            'product2' => $product2,
         ]);



    }
    public function create ()
    {
        return View::make('create');
    }

   /* public function addbook(Request $request)
    {
        Book::create($request->all());
        return redirect('/books');
    }
*/
    public function createe()
    {
        return view('products.createe');
    }


    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'description' => 'required',
        'price' => 'required|numeric',
    ]);

    $imagePath = $request->file('image')->store('public/images');
    $product = new Product();
    $product->name = $validatedData['name'];
    $product->image = $imagePath;
    $product->description = $validatedData['description'];
    $product->price = $validatedData['price'];
    $product->save();

    return redirect('/products')->with('success', 'محصول جدید با موفقیت افزوده شد.');
}


}
