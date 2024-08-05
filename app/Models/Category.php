<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Xác định các thuộc tính có thể gán hàng loạt
    protected $fillable = [
        'name',
        'slug',
        'description'
    ];

    // Định nghĩa mối quan hệ với bảng articles (một-nhiều)
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
