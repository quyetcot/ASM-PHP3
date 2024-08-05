@extends('admin.layouts.master')

@section('content')
<div class="container">
    <h1>Thêm danh mục</h1>
    
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="name">Tên danh mục</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required>
            @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug') }}" required>
            @error('slug')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="3">{{ old('description') }}</textarea>
            @error('description')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
@endsection
