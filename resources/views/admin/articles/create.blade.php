@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h1>Tạo bài viết mới</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Tiêu đề</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="lead">Tóm tắt</label>
                <textarea name="lead" class="form-control">{{ old('lead') }}</textarea>
            </div>
            <div class="form-group">
                <label for="content">Nội dung</label>
                <textarea name="content" class="form-control">{{ old('content') }}</textarea>
            </div>
            <div class="form-group">
                <label for="thumbnail">Hình ảnh</label>
                <input type="file" name="thumbnail" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="author_id">Tác giả</label>
                <select name="author_id" class="form-control">
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="category_id">Danh mục</label>
                <select name="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
@endsection
