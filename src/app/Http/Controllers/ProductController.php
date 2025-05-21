<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function products()
    {
        $products=Product::all();

        $products = Product::simplePaginate(6);

        return view('products',compact('products'));
    }

    public function add()
    {
        return view('register');
    }

    public function detail($id)
    {
        $product=Product::find($id);
        return view('detail',compact('product'));
    }

    public function register(ProductRequest $request)
    {
        $product=$request->only(['name','price','description']);

        $product['season']=implode(',',$request->season);

        $filename=$request->file('image')->store('public/images');
        $product['image']=basename($filename);

        Product::create($product);

        return redirect('/products');
    }

    public function search(Request $request)
    {
        $query=Product::query();

        if($request->filled('name')){
            $query->where('name','like','%'.$request->name.'%');
        }

        return view('products',compact('products'));
    }
}
