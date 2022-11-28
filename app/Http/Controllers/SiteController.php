<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
      return view('index');
    }
    public function shop(){
      return view('shop');
    }
     public function contact(){
      return view('contact');
    }
    public function blog(){
      return view('blog');
    }
    public function blogdetails(){
      return view('blogdetails');
    }
}
