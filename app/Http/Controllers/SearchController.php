<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Lấy từ khóa tìm kiếm từ query string
        $query = $request->input('query');

        // Tìm kiếm danh mục dựa trên từ khóa
        $categoryIds = Category::where('name', 'LIKE', "%{$query}%")->pluck('id');

        // Tìm kiếm các bài viết dựa trên từ khóa
        $articles_search = Article::where('title', 'LIKE', "%{$query}%")
            ->orWhere('lead', 'LIKE', "%{$query}%")
            ->orWhereIn('category_id', $categoryIds)
            ->latest()
            ->paginate(10);
        $articles = Article::with(['author', 'category'])->latest()->take(3)->get();
        // Trả về view với dữ liệu tìm kiếm
        return view('client.search_results', [
            'articles_search' => $articles_search,
            'query' => $query,
            'articles' => $articles
        ]);
    }
}
