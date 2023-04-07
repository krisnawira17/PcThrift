<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CartController extends Controller
{
    public function add(Request $request)
    {
        $image = $request->input('image');
        $price = $request->input('price');

        $cart = session()->get('cart', []);

        $cart[] = [
            'image' => $image,
            'price' => $price,
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Item added to cart successfully.');
    }

    public function index()
    {
        $cart = session()->get('cart', []);

        return view('cart', compact('cart'));
    }
}
