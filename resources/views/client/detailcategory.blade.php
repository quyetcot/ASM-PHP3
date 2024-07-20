@extends('client.layouts.master')
@section('title')
    Tin Tức 24h - 
@endsection
@section('content')
<div class="container my-5">
    <div class="section-title">
        <h4 class="m-0 text-uppercase font-weight-bold">{{ $category->name }}</h4>
    </div>
   
    
    @if($articles->count())
        <div class="row">
            @foreach($articles_category as $article)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset($article->thumbnail) }}" class="card-img-top" alt="{{ $article->title }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold"
                            href="{{ route('detailnew.show', ['category' => $article->category->slug, 'slug' => $article->slug]) }}">{{ $article->title }}</a>
                            <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                            <a href="{{ route('detailnew.show', ['category' => $article->category->slug, 'slug' => $article->slug]) }}" class="btn btn-primary">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Phân trang -->
        <div class="d-flex justify-content-center">
            {{ $articles_category->links() }}
        </div>
    @else
        <p>Chưa có bài viết</p>
    @endif
</div>

@endsection