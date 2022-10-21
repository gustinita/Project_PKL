<?php

namespace App\Http\Controllers;

use App\Models\orasiilmiah;
use Illuminate\Http\Request;

class OrasiilmiahController extends Controller
{
    public function index()
    {
        $orasilmiah = orasiilmiah::all();
        return view('orasi.index', compact('orasilmiah'));
    }

    public function create()
    {
        return view('orasi.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        orasiilmiah::create($request->except(['_token','submit']));
        return redirect('/orasilmiah');
    }

    public function edit($id)
    {
        $orasilmiah = orasiilmiah::find($id);
        return view('orasi.edit', compact(['orasilmiah']));
    }

    public function update($id, Request $request)
    {
        $orasilmiah = orasiilmiah::find($id);
        $orasilmiah->update($request->except(['_token','submit']));
        return redirect('/orasilmiah');
    }

    public function destroy($id)
    {
        $orasilmiah = orasiilmiah::find($id);
        $orasilmiah->delete();
        return redirect('/orasilmiah');
    }
}
