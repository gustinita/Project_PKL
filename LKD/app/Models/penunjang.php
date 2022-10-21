<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penunjang extends Model
{
    use HasFactory;
    protected $table = 'penunjangs';
    //protected $fillable = ['sub_unsur','nama_kegiatan'];
    protected $guarded = [];
}
