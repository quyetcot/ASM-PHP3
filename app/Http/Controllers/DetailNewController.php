<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class DetailNewController extends Controller
{
    //

    public function show($categorySlug, $articleSlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();

        // Lấy bài viết dựa trên slug và category_id
        $article = Article::where('slug', $articleSlug)
                          ->where('category_id', $category->id)
                          ->firstOrFail();
        // Tăng số lượt xem
        $article->increment('views');
        $articles = Article::with(['author', 'category'])->latest()->take(3)->get();

        return view('client.detailnew',['articles' => $articles,'article'=>$article]);
    }

   
}
