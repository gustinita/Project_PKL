<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tugastambahan extends Model
{
    use HasFactory;
    protected $table = 'tugastambahans';
    //protected $fillable = ['tugas_tambahan','unit_kerja'];
    protected $guarded = [];
}
