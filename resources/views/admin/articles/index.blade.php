@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h1>Danh sách bài viết</h1>
        <a href="{{ route('articles.create') }}" class="btn btn-primary">Tạo bài viết mới</a>
        @if (session('success'))
            <div class="alert alert-success mt-2">
                {{ session('success') }}
            </div>
        @endif
        <table class="table mt-2">
            <thead>
                <tr>
                    <th>Tiêu đề</th>
                    <th>Danh mục</th>
                    <th>Hình ảnh</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->category->name }}</td>
                        <td><img src="{{ asset($article->thumbnail) }}" alt="{{ $article->title }}" width="100"></td>
                        <td>
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info">Xem</a>
                            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Sửa</a>
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $articles->links() }}
    </div>
@endsection


