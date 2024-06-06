<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WelcomeController extends Controller
{
    public $products;

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

    public function detail()
    {
        return ('detail');
    }
}
