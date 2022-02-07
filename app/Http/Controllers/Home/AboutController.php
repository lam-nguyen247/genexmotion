<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;

class AboutController extends Controller
{
    public function index()
    {
        $path = 'about-us';
        $catagoryPost = Category::whereNotNull('category_id')->orderBy('category_id')->get();
        return view('home.' . $path . '.index', compact('catagoryPost'));
    }
}
