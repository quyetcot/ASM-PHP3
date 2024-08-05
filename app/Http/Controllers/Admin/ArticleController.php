<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Hiển thị danh sách bài viết
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    // Hiển thị form tạo bài viết
    public function create()
    {
        $categories = Category::all();
        $authors = User::all();
        return view('admin.articles.create', compact('categories', 'authors'));
    }

    // Lưu bài viết mới
    public function store(ArticleRequest $request)
    {
        $slug = \Str::slug($request->title);

        $article = new Article;
        $article->title = $request->title;
        $article->slug = $slug;
        $article->lead = $request->lead;
        $article->content = $request->content;
        $article->author_id = $request->author_id;
        $article->category_id = $request->category_id;

        if ($request->hasFile('thumbnail')) {
            $imageName = time().'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('images'), $imageName);
            $article->thumbnail = 'images/' . $imageName;
        }

        $article->save();

        return redirect()->route('articles.index')->with('success', 'Bài viết đã được tạo thành công');
    }

    // Hiển thị chi tiết bài viết
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.show', compact('article'));
    }

    // Hiển thị form chỉnh sửa bài viết
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::all();
        $authors = User::all();
        return view('admin.articles.edit', compact('article', 'categories', 'authors'));
    }

    // Cập nhật bài viết
    public function update(ArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $slug = \Str::slug($request->title);

        $article->title = $request->title;
        $article->slug = $slug;
        $article->lead = $request->lead;
        $article->content = $request->content;
        $article->author_id = $request->author_id;
        $article->category_id = $request->category_id;

        if ($request->hasFile('thumbnail')) {
            $imageName = time().'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('images'), $imageName);
            $article->thumbnail = 'images/' . $imageName;
        }

        $article->save();

        return redirect()->route('articles.index')->with('success', 'Bài viết đã được cập nhật thành công');
    }

    // Xóa bài viết
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Bài viết đã được xóa thành công');
    }
}
