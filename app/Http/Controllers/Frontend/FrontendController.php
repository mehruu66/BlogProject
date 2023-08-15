<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Post;


class FrontendController extends Controller
{
    public function index() {
        $all_categories = Category::where('status', '0')->get();
        $latest_posts = Post::where('status', '0')->orderBy('created_at', 'DESC')->get()->take(10);
        return view('frontend/index', compact('all_categories', 'latest_posts'));
    }
    
    public function viewCategoryPost(string $category_slug) {
        $category = Category::where('slug', $category_slug)->where('status', '0')->first();
        if ($category) {
            $posts = Post::where('category_id', $category->id)
            ->where('status', '0')
            ->paginate(3);
             return view('frontend.post.index', compact('posts', 'category'));
        } else {
            return redirect('/');
        }
    }
    public function viewPost(string $category_slug, string $post_slug) {
        $category = Category::where('slug', $category_slug)->where('status', '0')->first();
        if ($category) {
            $posts = Post::where('category_id', $category->id)->where('slug',$post_slug)->first();
            $latest_posts= Post::where('category_id', $category->id)
            ->orderBy('created_at', 'DESC')->where('status', '0')->get()->take(10);
             return view('frontend.post.view', compact('posts', 'latest_posts'));
        } else {
            return redirect('/');
        }
    }
    
}
