<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class WebstoreController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index')->with('products', $products);
    }

    # Our function for adding a certain product to the cart
    public function addToCart(Product $product)
    {
        Cart::add($product->id, $product->name, 1, $product->price);
//        return redirect('/home');
        return back()->with('status','Success: You have added products to your shopping cart');
    }

    # Our function for removing a certain product from the cart
    public function removeProductFromCart($productId)
    {
        Cart::remove($productId);
//        return redirect('/home');
        return back();
    }

    public function destroyCart()
    {
        Cart::destroy();
//        return redirect('/home');
        return back();
    }

}
