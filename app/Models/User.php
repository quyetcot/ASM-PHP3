<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Xác định các thuộc tính có thể gán hàng loạt
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'email_verified_at',
        'remember_token',
    ];

    // Các thuộc tính ẩn khi xuất ra JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Các thuộc tính sẽ được biến đổi thành các kiểu dữ liệu tương ứng
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Định nghĩa mối quan hệ với bảng articles (một-nhiều)
    public function articles()
    {
        return $this->hasMany(Article::class, 'author_id');
    }

    // Định nghĩa mối quan hệ với bảng comments (một-nhiều)
    // public function comments()
    // {
    //     return $this->hasMany(Comment::class, 'user_id');
    // }

    // Định nghĩa mối quan hệ với bảng likes (một-nhiều)
    // public function likes()
    // {
    //     return $this->hasMany(Like::class, 'user_id');
    // }
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isEditor()
    {
        return $this->role === 'editor';
    }

    public function isReader()
    {
        return $this->role === 'reader';
    }
}
