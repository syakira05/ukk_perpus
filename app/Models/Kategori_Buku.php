<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Buku extends Model
{
    use HasFactory;

    public function bukus()
    {
        return $this->hasMany(  Buku::class);
    }
}
