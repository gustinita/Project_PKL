<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajaran extends Model
{
    use HasFactory;
    protected $table = 'pengajarans';
    //protected $fillable = ['nama','email'];
    protected $guarded = [];
}
