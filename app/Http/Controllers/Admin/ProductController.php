<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.product.index', [
            'products' => $products
        ]);
    }

    public function getCreateProduct() {
        $categories = Category::all();

        return view('admin.product.create', [
            'categories' => $categories
        ]);
    }

    public function postCreateProduct(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'image' => 'required|image',
        ]);



        $product = new Product();

        $product->name = $request->name;

        if(Product::where('name', $request->name)->exists()) {
            $product->slug = Str::slug($request->name, '-') . '-' . Str::random(10);
        }
        else {
            $product->slug = Str::slug($request->name, '-');
        }

        $product->price = $request->price;

        if($request->priceSale == null || $request->priceSale > $request->price) {
            $product->priceSale = $request->price;
        }else {
            $product->priceSale = $request->priceSale;
        }

        $product->desc = $request->desc;

        $product->active = 1;

        $product->category_id = $request->category_id;

        //Upload avatar
        $image = $request->image;

        $image_new_name = time().$image->getClientOriginalName();

        $image->move('upload/product', $image_new_name);
        $product->image = 'upload/product/' . $image_new_name;

        //

        $product->save();

        return redirect('admin/product')->with('success', 'Bạn đã thêm 1 sản phẩm mới');
    }


    public function getUpdate($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        return view('admin.product.update', [
            'categories' => $categories,
            'product' => $product
        ]);
    }


    public function postUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'priceSale' => 'required',
            'desc' => 'required',
            'image' => 'image',
        ]);

        $product = Product::find($id);

        $product->name = $request->name;

        if(Product::where('name', $request->name)->exists()) {
            $product->slug = Str::slug($request->name, '-') . '-' . Str::random(10);
        }
        else {
            $product->slug = Str::slug($request->name, '-');
        }

        $product->price = $request->price;

        if($request->priceSale == null || $request->priceSale > $request->price) {
            $product->priceSale = $request->price;
        }
        else {
            $product->priceSale = $request->priceSale;
        }

        $product->desc = $request->desc;

        $product->category_id = $request->category_id;

        if($request->hasFile('image')) {
            $image = $request->image;

            $image_new_name = time() . $image->getClientOriginalName();

            $image->move('upload/product', $image_new_name);

            unlink($product->image);
            $product->image = 'uploads/products/' . $image_new_name;
        }

        $product->save();

        return redirect('admin/product')->with('success', 'Bạn đã sửa 1 sản phẩm');
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        unlink($product->image);
        $product->delete();

        return redirect()->back()->with('success', 'Đã xóa thành công');
    }
}
