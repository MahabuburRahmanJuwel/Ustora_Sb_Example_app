<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

        $this->products = Product::orderBy('id', 'desc')->get();
        return view('website.home', ['products' => $this->products]);
    }
    public function detail($id)
    {
        $this->product = Product::find($id);
        return view('website.detail', ['product' => $this->product]);
    }
}
