<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembimbingdosen extends Model
{
    use HasFactory;
    protected $table = 'pembimbingdosens';
    // protected $fillable = ['nama_pembimbing', 'nama_bimbingan'];
    protected $guarded = [];
}
