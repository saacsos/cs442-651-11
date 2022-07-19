<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; // trait

    public function scopePopular($query) {
        return $query->where('like_count', '>', 40000)
                     ->orWhere('view_count', '>', 190000);
    }
}
