<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Jenssegers\Agent\Agent;

class HomeController extends Controller
{
    public function index()
    {
        $agent = new Agent();
        $catagoryPost = Category::whereNotNull('category_id')->orderBy('category_id')->get();
        $postYoutube = Category::with('postYoutube')->whereNotNull('category_id')->orderBy('category_id')->get();

        return view('home.index', compact('agent', 'catagoryPost', 'postYoutube'));
    }

    public function services($parantSlug, $subSlug)
    {
        $postServices = Category::with('postYoutube')->where('slug', $subSlug)->first();

        return view('home.service.index', compact('postServices'));
    }
}
