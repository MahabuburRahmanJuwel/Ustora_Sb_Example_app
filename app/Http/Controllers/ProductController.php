<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    private $products;

    public function addProduct()
    {
        return view('admin.product.add');
    }

    public function create(Request $request)
    {
        Product::newProduct($request);
        return redirect('/add-product')->with('message', 'Product info create successfully.');
    }

    public function manageProduct()
    {
        $this->products = Product::all();
        return view('admin.product.manage', ['products' => $this->products]);
    }

    public function edit($id)
    {
        $this->Product = Product::find($id);
        return view('admin.product.edit', ['product' => $this->Product]);
    }

    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('manage-product')->with('message', 'Product info update successfully.');
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        return redirect('/manage-product')->with('message', 'Product info delete successfully.');
    }
}
