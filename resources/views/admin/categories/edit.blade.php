@extends('admin.layouts.master')

@section('content')
<div class="container">
    <h1>Sửa danh mục</h1>
    
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Tên danh mục</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $category->name }}" required>
            @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ $category->slug }}" required>
            @error('slug')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="3">{{ $category->description }}</textarea>
            @error('description')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
@endsection
