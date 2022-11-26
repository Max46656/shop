<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function shop()
    {
        return view('shop');
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
}
