@extends('client.layouts.master')
@section('title')
    Tin Tức 24h - 
@endsection
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <p class="mb-10">
                <strong>Danh mục:</strong> <a href="">{{ $article->category->name }}</a>
            </p>
            <div class="article-detail">
               
                
                <h1 class="display-4">{{ $article->title }}</h1>
                <p class="text-muted">
                    <small>{{ $article->created_at->format('M d, Y') }} bởi {{ $article->author->name }}</small>
                </p>
                <div class="article-thumbnail mb-4">
                    <img src="{{ asset($article->thumbnail) }}" alt="{{ $article->title }}" class="img-fluid rounded" style="width: 100%; max-height: 500px; object-fit: cover;">
                </div>
                <div class="article-content mb-4">
                    <h4>{{ $article->lead }}</h4>
                </div>
                <div class="article-content mb-4">
                    <p>{{ $article->content }}</p>
                </div>
                <div class="article-meta d-flex justify-content-between">
                    <p class="mb-0">
                        <strong>Views:</strong> {{ $article->views }}
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection