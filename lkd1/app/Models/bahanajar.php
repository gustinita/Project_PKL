<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bahanajar extends Model
{
    use HasFactory;
    protected $table = 'bahanajars';
    //protected $fillable = ['judul_bahan_ajar', 'isbn'];
    protected $guarded = [];
}
