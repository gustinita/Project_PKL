<?php

namespace App\Http\Controllers;

use App\Models\penelitian;
use App\Models\pengabdian;
use App\Models\pengajaran;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index (){
        $penelitian = penelitian::all();
        $pengabdian = pengabdian::all();
        $pengajaran = pengajaran::all();
        return view('dosen.laporan', compact(['penelitian','pengabdian', 'pengajaran']));
    }
}
