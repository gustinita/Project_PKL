<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengabdian extends Model
{
    use HasFactory;
    protected $table = 'pengabdians';
    //protected $fillable = ['nidn', 'nama'];
    protected $guarded = [];
}
