<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function addToCart($id, Request $request) {

        $product = Product::find($id);
        $cart = session()->get('cart');
        $request->quantity ? $quantity = $request->quantity : $quantity = 1;

        if(isset($cart[$id])) {
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + $quantity ;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'feature_image' => $product->feature_image,
                'quantity' => $quantity,
                'id' => $product->id
            ];
        }

        session()->put('cart', $cart);

        return response()->json([
            'code' => 'success',
        ], 200);

    }

    function showCart() {
        $carts = session()->get('cart');
        // echo "<pre>";
        // print_r($carts);

        $menus = Menu::where('parent_id', 0)->get();

      return view('cart', compact('menus', 'carts'));
    }




    function updateCart(Request $request) {
        $carts = session()->get('cart');
        $carts[$request->id]['quantity'] = $request->quantity ;
        session()->put('cart', $carts);
        $carts = session()->get('cart');

        $cartAfterUpdate = view('partials.cartComponent', compact('carts'))->render();
        return response()->json([
            'cartAfterUpdate' => $cartAfterUpdate,
            'code' => 'success'
        ], 200);
    }


    function deleteCart(Request $request) {
        $carts = session()->get('cart');
        unset($carts[$request->id]);
        session()->put('cart', $carts);
        $carts = session()->get('cart');

        $cartAfterUpdate = view('partials.cartComponent', compact('carts'))->render();
        return response()->json([
            'cartAfterUpdate' => $cartAfterUpdate,
            'code' => 'success'
        ], 200);
    }

}
