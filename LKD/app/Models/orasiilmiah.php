<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orasiilmiah extends Model
{
    use HasFactory;
    protected $table = 'orasiilmiahs';
    // protected $fillable = ['kategori_kegiatan, judul_makalah'];
    protected $guarded = [];
}
