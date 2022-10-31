<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Jenssegers\Agent\Agent;

class HomeController extends Controller
{
    public function index()
    {
        $postYoutube = Category::with('serviceList')->orderBy('category_id')->get();
        return view('home.index', compact('postYoutube'));
    }
    public function services($subSlug)
    {
        $postServices = Category::with('serviceList')->where('slug', $subSlug)->first();
        return view('home.service.index', compact('postServices'));
    }
}
