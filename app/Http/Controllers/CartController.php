<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use App\Http\Requests\RemoveFromCartRequest;
use App\Http\Resources\CartProductResource;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(AddToCartRequest $request)
    {
        $userId = auth()->id();
        $cartKey = "cart_{$userId}";

        $cart = Cache::get($cartKey, []);

        $product = Product::where('product_id',$request->product_id)->first();

        if (isset($cart[$request->product_id])) {
            return back()->with('error', 'Product already in cart');
        }
        if ($product->quantity<= 0) {
            return back()->with('error', 'product quantity is finish');
        }
        $product->quantity-=$request->quantity;
        $product->save();

        $cart->push([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity
        ]);
        Cache::put($cartKey, $cart->toArray(), now()->addDays(30));

        return back()->with('success', 'Product added to cart');
    }

    public function removeFromCart(RemoveFromCartRequest $request)
    {
        $userId = auth()->id();
        $cartKey = "cart_{$userId}";

        $cart = Cache::get($cartKey, []);

        if (!$cart->contains('product_id', $request->product_id)) {
            return back()->with('error', 'Product not in cart');
        }

        $cart = $cart->reject(function ($item) use ($request) {
            return $item['product_id'] === $request->product_id;
        });

        Cache::put($cartKey, $cart->values()->toArray(), now()->addDays(30));
        $product = Product::where('product_id',$request->product_id)->first();

        $product->quantity+=$request->quantity;

        $product->save();

        return back()->with('success', 'Product removed from cart');
    }

    public function viewCart()
    {
        $userId = auth()->id();
        $cartKey = "cart_{$userId}";

        $cart = collect(Cache::get($cartKey, []));

        if ($cart->isEmpty()) {
            return view('cart', ['cart' => [], 'message' => 'Cart is empty']);
        }

        $productIds = $cart->pluck('product_id')->toArray();
        $products = Product::whereIn('id', $productIds)->get();

        $products->each(function ($product) use ($cart) {
            $product->quantity = $cart->firstWhere('product_id', $product->id)['quantity'];
        });

        $cartProducts = CartProductResource::collection($products);

        return view('cart', ['cart' => $cartProducts]);
    }

}
