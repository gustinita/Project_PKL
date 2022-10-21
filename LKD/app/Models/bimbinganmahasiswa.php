<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bimbinganmahasiswa extends Model
{
    use HasFactory;
    protected $table = 'bimbinganmahasiswas';
    //protected $fillable = ['nama_mahasiswa', 'npm'];
    protected $guarded = [];
}
