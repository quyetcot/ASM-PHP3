@extends('client.layouts.master');
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center text-uppercase">Đăng nhập</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
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
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Ghi nhớ tôi</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Đăng nhập</button>
                    </div>
                </form>
                {{-- <div class="mt-3">
                <a href="{{ route('password.request') }}">Quên mật khẩu?</a>
            </div> --}}
                <div class="mt-2">
                    <a href="{{ route('register') }}">Chưa có tài khoản? Đăng ký ngay!</a>
                </div>
            </div>
        </div>
    </div>
@endsection
