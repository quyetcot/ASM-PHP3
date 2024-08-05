@extends('client.layouts.master');
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center text-uppercase mt-3">Đăng ký</h1>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên:</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}"
                            required>
                        @error('name')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}"
                            required>
                        @error('email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                        @error('password')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Xác nhận mật khẩu:</label>
                        <input type="password" id="password-confirm" name="password_confirmation" class="form-control"
                            required>
                        @error('password_confirmation')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Đăng ký</button>
                    </div>
                </form>
                <div class="mt-3">
                    <a href="{{ route('login') }}">Đã có tài khoản? Đăng nhập ngay!</a>
                </div>
            </div>
        </div>
    </div>
@endsection
