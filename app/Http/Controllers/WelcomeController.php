<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WelcomeController extends Controller
{
    public $products, $product, $fullName;

    public function index()
    {
        $this->products = Product::getProduct();
        return view('home', ['products' => $this->products]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function detail($id)
    {
        $this->product = Product::getProductById($id);
        return view('detail', ['product' => $this->product]);
    }

    public function makeFullName(Request $request)
    {
        $this->fullName = $request->first_name . ' ' . $request->last_name;
        return back()->with('result', $this->fullName);
    }
}
