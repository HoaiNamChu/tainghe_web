<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addToCart(Request $request)
    {
        $quantity = $request->quantity;
        $productId = $request->product_id;

        $cart = session()->get('cart', []);

        $cart[$request->product_id] = [
            'product' => Product::with('productVariants')->findOrFail($productId),
            'quantity' => $quantity
        ];

        session()->put('cart', $cart);

        return response()->json(['success' => true]);
    }

    public function showCart()
    {
        $cart = session()->get('cart', []);

        return view('clients.cart_partial', compact('cart'))->render();
    }

    public function getTotalItem()
    {
        return response()->json(count(session('cart')));
    }


    public function removeItem(Request $request)
    {

        session()->forget('cart.' . $request->temp_id);

        return response()->json(['success' => true]);

    }

    public function updateCart(Request $request){

        $cart = session()->get('cart', []);

        // Cập nhật giỏ hàng dựa trên mảng quantity
        foreach ($request->quantity as $productId => $quantity) {

            $quantity = (int)$quantity[0]; // Ép kiểu về số nguyên
            if ($quantity > 0) {
                // Nếu quantity > 0, cập nhật số lượng
                if (isset($cart[$productId])) {
                    $cart[$productId]['quantity'] = $quantity;
                }
            } else {
                // Nếu quantity <= 0, xóa sản phẩm khỏi giỏ
                unset($cart[$productId]);
            }
        }

        // Lưu lại giỏ hàng vào session
        session()->put('cart', $cart);

        return response()->json(['success' => true]);
    }
}
