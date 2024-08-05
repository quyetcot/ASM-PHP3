@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h1>Sửa bài viết</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Tiêu đề</label>
                <input type="text" name="title" class="form-control" value="{{ $article->title }}">
            </div>
            <div class="form-group">
                <label for="lead">Lead</label>
                <textarea name="lead" class="form-control">{{ $article->lead }}</textarea>
            </div>
            <div class="form-group">
                <label for="content">Nội dung</label>
                <textarea name="content" class="form-control">{{ $article->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="thumbnail">Hình ảnh</label>
                <input type="file" name="thumbnail" class="form-control-file">
                @if ($article->thumbnail)
                    <img src="{{ asset($article->thumbnail) }}" alt="{{ $article->title }}" width="100">
                @endif
            </div>
            <div class="form-group">
                <label for="author_id">Tác giả</label>
                <select name="author_id" class="form-control">
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}" @if ($article->author_id == $author->id) selected @endif>
                            {{ $author->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="category_id">Danh mục</label>
                <select name="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if ($article->category_id == $category->id) selected @endif>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
@endsection
