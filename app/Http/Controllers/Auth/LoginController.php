<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //Hiển thị Form
    public function showLoginForm()
    {
        $articles = Article::with(['author', 'category'])->latest()->take(3)->get();
        
        return view('auth.login',['articles'=>$articles]);
    }

    // Xử lý đăng nhập
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công, gọi phương thức authenticated
            return $this->authenticated($request, Auth::user());
        }

        // Đăng nhập thất bại
        return back()->withErrors([
            'email' => 'Email hoặc mật khẩu không đúng!!!',
        ]);
    }

    // Xử lý sau khi đăng nhập thành công
    protected function authenticated(Request $request, $user)
    {
        if ($user->isAdmin()) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->isEditor()) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect('/');
        }
    }

    //Đăng xuất
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect()->route('login'); // Chuyển hướng về trang đăng nhập
    }
}
