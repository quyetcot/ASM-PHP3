<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Lấy từ khóa tìm kiếm từ query string
        $query = $request->input('query');

        // Tìm kiếm các bài viết dựa trên từ khóa
        $articles_search = Article::where('title', 'LIKE', "%{$query}%")
                           ->orWhere('content', 'LIKE', "%{$query}%")
                           ->orWhere('lead', 'LIKE', "%{$query}%")
                           ->latest()
                           ->paginate(10);
                           $articles = Article::with(['author', 'category'])->latest()->take(3)->get();
        // Trả về view với dữ liệu tìm kiếm
        return view('client.search_results', [
            'articles_search' => $articles_search,
            'query' => $query,
            'articles'=>$articles
        ]);
    }
}