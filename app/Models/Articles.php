<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use App\Models\User;
// use App\Models\Category;

class Articles extends Model
{
    use HasFactory;

    // protected $fillable = ['title','excerpt','description'];
    protected $guarded = ['id'];

    // relational table ORM menggunakan One To One method pada Artikel
    // dikarenakan setiap 1 artikel mempunyai 1 kategori
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
