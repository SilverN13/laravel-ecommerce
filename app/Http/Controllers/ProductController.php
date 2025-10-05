<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_product()
    {
        $cat = Category::all();
        return view('admin.add_product', compact('cat'));
    }

    public function upload_product(Request $r)
    {

        $r->validate([
            'title' => 'required | string | max:100',
            'description' => 'nullable',
            'price' => 'string',
            'category' => 'string ',
            'quantity' => 'string'
        ]);

        $product = new Product;
        $product->title = $r->title;
        $product->description = $r->description;
        $product->image = $r->image;
        $product->price = $r->price;
        $product->category = $r->category;
        $product->quantity = $r->qty;

        if ($r->hasFile('image')) {
            $file = $r->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $r->image->move('products', $fileName);
            $product->image = $fileName;
        }
        $product->save();

        toastr()->timeOut(5000)->closeButton()->success('Product Added Successfully');


        return redirect()->back();
    }

    public function view_product()
    {
        $products = Product::paginate(3);
        return view('admin.view_product', compact('products'));
    }

    public function edit_product($id)
    {
        $cat = Category::all();
        $products = Product::find($id);
        return view('admin.edit_product', compact(['products', 'cat']));
    }

    public function update_product(Request $r, $id)
    {
        $r->validate([
            'title' => 'required | string | max:100',
            'description' => 'nullable',
            'price' => 'string',
            'category' => 'string ',
            'quantity' => 'string'
        ]);
        $products = Product::find($id);
        $products->title = $r->title;
        $products->description = $r->description;
        $products->image = $r->image;
        $products->price = $r->price;
        $products->category = $r->category;
        $products->quantity = $r->qty;

        if ($r->hasFile('image')) {
            $file = $r->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $r->image->move('products', $fileName);
            $products->image = $fileName;
        }
        $products->save();
        toastr()->timeOut(5000)->closeButton()->success('Product Udated Successfully');
        return redirect('/view_product');
    }

    public function search_product(Request $r)
    {
        $search = $r->search;

        $products = Product::where('title', 'LIKE', '%' . $search . '%')->orWhere('category', 'LIKE', '%' . $search . '%')->paginate(3);

        return view('admin.view_product', compact('products'));
    }

    public function delete_product($id)
    {
        $product = Product::find($id);
        $image_path = public_path('products/' . $product->image);
        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $product->delete();

        toastr()->timeOut(5000)->closeButton()->success('Product Deleted Successfully');
        return redirect()->back();
    }
}
