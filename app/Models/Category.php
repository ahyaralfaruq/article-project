<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Articles;

class Category extends Model
{
    use HasFactory;

    // untuk tidak memperbolehkan field column id agar diisi
    protected $guarded = ['id'];

    // relational table ORM menggunakan One To Many method pada kategori
    // dikarenakan setiap 1 kategori mempunyai banyak artikel
    public function posts() {
        return $this->hasMany(Articles::class);
    }

}
