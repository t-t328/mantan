<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * 商品一覧を表示
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // 1ページあたり15件の商品を表示する例
        $products = Product::paginate(15); 
        
        return view('products.index', compact('products'));
    }

    /**
     * 特定の商品詳細を表示
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\View\View
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
}