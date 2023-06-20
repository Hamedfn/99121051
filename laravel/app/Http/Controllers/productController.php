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

    public function addbook(Request $request)
    {
        Book::create($request->all());
        return redirect('/books');
    }



}
