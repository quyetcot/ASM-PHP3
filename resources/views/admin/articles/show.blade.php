@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h1>{{ $article->title }}</h1>
        
        <div class="mb-3">
            <img src="{{ asset($article->thumbnail) }}" alt="{{ $article->title }}" class="img-fluid">
        </div>
        
        <div class="mb-3">
            <h5>Tóm tắt:</h5>
            <p>{{ $article->lead }}</p>
        </div>

        <div class="mb-3">
            <h5>Nội dung:</h5>
            <p>{{ $article->content }}</p>
        </div>

        <div class="mb-3">
            <h5>Tác giả:</h5>
            <p>{{ $article->author->name }}</p>
        </div>

        <div class="mb-3">
            <h5>Danh mục:</h5>
            <p>{{ $article->category->name }}</p>
        </div>

        <a href="{{ route('articles.index') }}" class="btn btn-primary">Quay lại danh sách bài viết</a>
    </div>
@endsection
