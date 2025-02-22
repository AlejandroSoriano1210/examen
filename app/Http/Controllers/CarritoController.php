<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::where('user_id', Auth::id())->with('product')->get();
        return view('cart.index', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        $cartItem = CartItem::where('user_id', Auth::id())
            ->where('product_id', $product->id)
            ->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
        } else {
            CartItem::create([
                'user_id' => Auth::id(),
                'product_id' => $product->id,
                'quantity' => 1
            ]);
        }

        return redirect()->route('cart.index');
    }

    public function updateCart(Request $request, CartItem $cartItem)
    {
        $this->authorize('update', $cartItem);

        if ($request->action === 'increase') {
            $cartItem->increment('quantity');
        } elseif ($request->action === 'decrease' && $cartItem->quantity > 1) {
            $cartItem->decrement('quantity');
        } else {
            $cartItem->delete();
        }

        return redirect()->route('cart.index');
    }

    public function removeItem(CartItem $cartItem)
    {
        $this->authorize('delete', $cartItem);
        $cartItem->delete();
        return redirect()->route('cart.index');
    }
}

