<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\TopProduct;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $womanProducts = Product::all();
        $womanProducts = Product::paginate(10);
        $getProducts = TopProduct::all();
        return view('women', compact('womanProducts', 'getProducts'));
    }

    public function womanDress()
    {
        $womenDress = Product::all();
        $womenDress = Product::paginate(10);
        $getProducts = TopProduct::all();
        return view('women-dress', compact('womenDress', 'getProducts'));
    }

    public function womanBlouses()
    {
        $womenBlouses = Product::all();
        $womenBlouses = Product::paginate(10);
        $getProducts = TopProduct::all();
        return view('women-blouses', compact('womenBlouses', 'getProducts'));
    }

    public function womanJeans()
    {
        $womanJeans = Product::all();
        $womanJeans = Product::paginate(10);
        $getProducts = TopProduct::all();
        return view('women-jeans', compact('womanJeans', 'getProducts'));
    }

    public function men()
    {
        $men = Product::all();
        $men = Product::paginate(10);
        $getProducts = TopProduct::all();
        return view('men', compact('men', 'getProducts'));
    }

    public function menShirts()
    {
        $men = Product::all();
        $men = Product::paginate(10);
        $getProducts = TopProduct::all();
        return view('men-shirts', compact('men', 'getProducts'));
    }

    public function menSweaters()
    {
        $men = Product::all();
        $men = Product::paginate(10);
        $getProducts = TopProduct::all();
        return view('men-sweaters', compact('men', 'getProducts'));
    }

    public function menPants()
    {
        $men = Product::all();
        $men = Product::paginate(10);
        $getProducts = TopProduct::all();
        return view('men-pants', compact('men', 'getProducts'));
    }

    public function accessories()
    {
        $accessories = Product::all();
        $accessories = Product::paginate(10);
        $getProducts = TopProduct::all();
        return view('accessories', compact('accessories', 'getProducts'));
    }

    public function accessoriesSunglasses()
    {
        $accessories = Product::all();
        $accessories = Product::paginate(10);
        $getProducts = TopProduct::all();
        return view('accessories-sunglasses', compact('accessories', 'getProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
