<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profiladmn extends Model
{
    use HasFactory;
    protected $table = 'profiladmns';
    // protected $fillable = ['nama','email'];
    protected $guarded = [];
}

