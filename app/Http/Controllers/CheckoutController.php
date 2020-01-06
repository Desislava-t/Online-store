<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_first_name' => 'required|string|max:255',
            'customer_email' => 'email|string|required|max:255',
            'customer_last_name' => 'required|string|max:255',
            'customer_shipping_address' => 'required|string|max:255',
            'customer_country' => 'string|required',
            'customer_city' => 'required|string',
            'country_code' => 'required',


        ]);


        Invoice::create([
            'customer_first_name' => $request->input('customer_first_name'),
            'customer_email' => $request->input('customer_email'),
            'customer_last_name' => $request->input('customer_last_name'),
            'customer_shipping_address' => $request->input('customer_shipping_address'),
            'customer_country' => $request->input('customer_country'),
            'customer_city' => $request->input('customer_city'),
            'country_code' => $request->input('country_code'),
            'customer_information' => $request->input('customer_information'),
        ]);

        return redirect('/checkout')->with('message', 'You have successfully order! ');

    }
}
