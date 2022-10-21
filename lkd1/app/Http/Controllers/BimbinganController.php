<?php

namespace App\Http\Controllers;

use App\Models\bimbinganmahasiswa;
use Illuminate\Http\Request;

class BimbinganController extends Controller
{
    public function index()
    {
        $bimbingan = bimbinganmahasiswa::all();
        return view('bimbinganmhs.index', compact('bimbingan'));
    }

    public function create()
    {
        return view('bimbinganmhs.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        bimbinganmahasiswa::create($request->except(['_token','submit']));
        return redirect('/bimbmhs');
    }

    public function edit($id)
    {
        $bimbingan = bimbinganmahasiswa::find($id);
        return view('bimbinganmhs.edit', compact(['bimbingan']));
    }

    public function update($id, Request $request)
    {
        $bimbingan = bimbinganmahasiswa::find($id);
        $bimbingan->update($request->except(['_token','submit']));
        return redirect('/bimbmhs');
    }

    public function destroy($id)
    {
        $bimbingan = bimbinganmahasiswa::find($id);
        $bimbingan->delete();
        return redirect('/bimbmhs');
    }
}
