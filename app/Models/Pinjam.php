<?php

namespace App\Models;

use App\models\Buku;
use App\modols\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Pinjam extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo( User::class);
    }

    public function buku()
    {
        return $this->belongsTo( Buku::class);
    }
}
