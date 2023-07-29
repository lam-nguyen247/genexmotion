<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;

class AboutController extends Controller {
    public function index() {
        $path = 'about-us';
        $postYoutube = Service::orderBy('id', 'desc')->paginate(8);
        return view('home.' . $path . '.index', compact('postYoutube'));
    }
}
