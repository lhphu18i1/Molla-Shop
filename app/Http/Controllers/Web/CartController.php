<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function addCart($id)
    {
        $product = Product::findOrFail($id);

        Cart::add([
            'id' => $id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->discount ?? $product->price,
            'weight' => $product->weight ?? 0,
            'image' => $product->image,
        ]);

        return back();
    }
    public function viewCart()
    {
        $carts = Cart::content();
        $total = Cart::priceTotal();
        $subtotal = Cart::subtotal();

        return view('web.shopping_cart', compact('carts', 'total', 'subtotal'));
    }

    public function deleteCart($rowId)
    {
        Cart::remove($rowId);

        return back();
    }

    public function destroyCart()
    {
        Cart::destroy();

        return back();
    }
    public function updateCart(Request $request)
    {
        if ($request->ajax()) {
            Cart::update($request->rowId, $request->qty);
        }
    }
}
