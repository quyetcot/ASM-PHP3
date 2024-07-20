@extends('client.layouts.master');
@section('content')
<div class="container">
    <h1>Kết quả tìm kiếm cho: "{{ $query }}"</h1>
    
    @if($articles_search->count())
        <ul class="list-group">
            @foreach($articles_search as $article)
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
        </ul>
        <!-- Hiển thị phân trang -->
        {{ $articles_search->links() }}
    @else
        <p>Không tìm thấy bài viết nào.</p>
    @endif
</div>
@endsection