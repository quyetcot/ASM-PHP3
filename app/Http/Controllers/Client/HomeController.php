<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        
        $articles = Article::with(['author', 'category'])->latest()->take(3)->get();

        $randomArticles = Article::with(['author', 'category'])->inRandomOrder()->take(4)->get();

        $featuredNews = Article::with(['author', 'category'])->orderBy('views','desc')->take(5)->get();

        $latestArticles = Article::with(['author', 'category'])->latest()->take(4)->get();

        $economicsArticles = Article::with(['author', 'category'])
        ->whereHas('category', function ($query) {
        $query->where('name', 'kinh tế');
        })->latest()->take(4)->get();
        
        $random5Articles = Article::with(['author', 'category'])->inRandomOrder()->take(7)->get();

        


        return view('client.index', ['articles' => $articles,'randomArticles'=>$randomArticles,
        'featuredNews'=>$featuredNews,'latestArticles'=>$latestArticles,'economicsArticles'=>$economicsArticles,
        'random5Articles'=>$random5Articles]);
    }

    public function slugCategory($categorySlug)
    {
        // Lấy danh mục dựa trên slug
        $category = Category::where('slug', $categorySlug)->firstOrFail();

        // Lấy bài viết thuộc danh mục
        $articles = Article::where('category_id', $category->id)->get();

        // Truyền danh mục và bài viết đến view
        return view('client.index', [
            'category' => $category,
            'articles' => $articles,
        ]);
    }

    
}
