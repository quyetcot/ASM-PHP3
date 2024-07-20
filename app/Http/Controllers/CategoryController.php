<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // 
    public function show($slug)
    {
        // Lấy danh mục dựa trên slug
        $category = Category::where('slug', $slug)->firstOrFail();

        // Lấy các bài viết thuộc danh mục
        $articles_category = Article::where('category_id', $category->id)->latest()->paginate(10);

        $articles = Article::with(['author', 'category'])->latest()->take(3)->get();

        // Trả về view với dữ liệu danh mục và bài viết
        return view('client.detailcategory', compact('category', 'articles','articles_category'));
    }

  
    
    

}
