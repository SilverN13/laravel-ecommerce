<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function category()
    {
        $datas = Category::all();
        return view('admin.category', compact('datas'));
    }

    public function add_category(Request $request)
    {

        $category = new Category;
        $category->category_name = $request->category;
        $category->save();

        toastr()->timeOut(5000)->closeButton()->success('Category Added Successfully');

        return redirect()->back();
    }

    public function edit_category($id)
    {
        $datas = Category::find($id);
        return view('admin.edit_category', compact('datas'));
    }

    public function update_category($id, Request $request)
    {
        $datas = Category::find($id);
        $datas->category_name = $request->Up_category;
        $datas->save();
        toastr()->timeOut(5000)->closeButton()->success('Category Updated Successfully');
        return redirect('category');
    }

    public function delete_category($id)
    {
        $category =  Category::find($id);
        $category->delete();

        toastr()->timeOut(5000)->closeButton()->success('Category Deleted Successfully');

        return redirect()->back();
    }


}
