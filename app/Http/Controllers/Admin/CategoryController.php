<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('admin.category.index', [
            'categories' => $categories
        ]);
    }


    public function postCreateCategory(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories,name'
        ]);

        $category = new Category();

        $category->name = $request->name;

        $category->slug = Str::slug($request->name, '-');

        $category->save();

        return redirect()->back()->with('success', 'Đã thêm 1 danh mục');
    }


    public function getUpdate($id)
    {
        $category = Category::find($id);

        return view('admin.category.update', [
            'category' => $category
        ]);
    }


    public function postUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories,name'
        ]);

        $category = Category::find($id);

        $category->name = $request->name;

        $category->slug = Str::slug($request->name, '-');

        $category->save();

        return redirect('admin/category')->with('success', 'Đã update 1 danh mục');
    }


    public function destroy($id)
    {
        Category::destroy($id);

        return redirect()->back()->with('success', 'Đã xóa 1 danh mục');
    }
}
