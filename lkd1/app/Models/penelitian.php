<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penelitian extends Model
{
    use HasFactory;
    protected $table = 'penelitians';
    //protected $fillable = ['nidn', 'nama'];
    protected $guarded = [];
}
