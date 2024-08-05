@extends('client.layouts.master');
@section('content')
<div class="container">
    <h1>Quên Mật Khẩu</h1>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Gửi Link Đặt Lại Mật Khẩu</button>
    </form>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
</div>
@endsection