<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function papaview()
    {
        return view('layouts.master');
    }
    public function index()
    {
        return view('index');
    }
    public function shop()
    {
        return view('shop');
    }
<<<<<<< Updated upstream
    public function papaview()
    {
        return view('layouts.master');
    }

}
=======
    public function about()
    {
        return view('about');
    }
    public function product_details()
    {
        return view('product_details');
    }
    public function login()
    {
        return view('login');
    }
    public function cart()
    {
        return view('cart');
    }
    public function elements()
    {
        return view('elements');
    }
    public function confirmation()
    {
        return view('confirmation');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function contact()
    {
        return view('contact');
    }

}
>>>>>>> Stashed changes
