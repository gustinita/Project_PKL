<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datasering extends Model
{
    use HasFactory;
    protected $table = 'dataserings';
    //protected $fillable = ['perguruan_tinggi_sasaran', 'bidang_tugas'];
    protected $guarded = [];
}
