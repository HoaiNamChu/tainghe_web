<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productDetail(Request $request)
    {
        $slug = $request->slug;

        $product = Product::where('slug', $slug)->with('productVariants', 'categories', 'tags', 'brand', 'productMedias')->first();

        return view('clients.product_detail', compact('product'));
    }
}
