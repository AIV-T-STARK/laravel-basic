<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;

class UserController extends Controller
{
    public function index() {

        $categories = Category::all();

        $products = Product::where('active', 1)->take(10)->get();

        return view('user.index', [
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function getProduct($slug) {

        $product = Product::where('slug', $slug)->first();

        return view('user.product', [
            'product' => $product
        ]);
    }

    public function getProductOfCategory($slug) {

        $category = Category::where('slug', $slug)->first();

        $categoryName = $category->name;

        $products = $category->product->where('active', 1);

        return view('user.category', [
            'products' => $products,
            'categoryName' => $categoryName
        ]);
    }
}
