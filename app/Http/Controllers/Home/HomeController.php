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
    public function services($parentSlug, $subSlug)
    {
        $postList = [];
        return view('home.service.index', compact('postList'));
    }
}
