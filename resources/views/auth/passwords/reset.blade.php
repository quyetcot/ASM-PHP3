@extends('client.layouts.master');
@section('content')
<div class="container">
    <h1>Đặt Lại Mật Khẩu</h1>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password-confirm">Xác nhận mật khẩu:</label>
            <input type="password" id="password-confirm" name="password_confirmation" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Đặt lại Mật Khẩu</button>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
</div>
@endsection