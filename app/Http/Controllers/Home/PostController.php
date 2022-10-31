<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Services\ImageService;
use App\Services\PostService;

class PostController extends Controller
{
    private $postService;
    private $imageService;

    public function __construct(PostService $postService, ImageService $imageService)
    {
        $this->postService = $postService;
        $this->imageService = $imageService;
    }

    public function index()
    {
        $postServices = Category::with('serviceList')->where('slug', 'san-xuat-video-theo-yeu-cau')->first();
        return view('home.service.index', compact('postServices'));
    }

    public function detail($news, Post $post)
    {
        $path = 'news';
        if (request()->segment(1) != trans($path)) {
            return redirect(trans($path));
        }
        $seo = $post->seo;
        $menuList = $this->imageService->getMenuList($post->content);
        $postList = $this->postService->getPostList()->limit(5)->get();
        return view('home.post.detail', compact('menuList', 'post', 'seo', 'postList'));
    }
}
