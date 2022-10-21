<?php

namespace App\Http\Controllers;

use App\Models\pengujianmhs;
use Illuminate\Http\Request;

class PengujianmhsController extends Controller
{
    public function index()
    {
        $pengujian = pengujianmhs::all();
        return view('pengujian.index', compact('pengujian'));
    }

    public function create()
    {
        return view('pengujian.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        pengujianmhs::create($request->except(['_token','submit']));
        return redirect('/pengmhs');
    }

    public function edit($id)
    {
        $pengujian = pengujianmhs::find($id);
        return view('pengujian.edit', compact(['pengujian']));
    }

    public function update($id, Request $request)
    {
        $pengujian = pengujianmhs::find($id);
        $pengujian->update($request->except(['_token','submit']));
        return redirect('/pengmhs');
    }

    public function destroy($id)
    {
        $pengujian = pengujianmhs::find($id);
        $pengujian->delete();
        return redirect('/pengmhs');
    }
}
