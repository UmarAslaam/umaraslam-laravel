<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index () {
        //Compact Method
        $name = "Umar Aslam";
        $email = "umaraslam@gmail.com";
        $age = 23;
        $city = "Karachi";
        $address = "Nazimabad No 2 karachi";
    return view('index',compact("name","email","age","city","address"));
}
  public function about () {
    return view('about');
}
  public function services () {
    return view('services');
}
  public function projects () {
    return view('projects');
}
  public function contact () {
    return view('contact');
}
}
