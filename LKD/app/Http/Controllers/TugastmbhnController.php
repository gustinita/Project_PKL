<?php

namespace App\Http\Controllers;

use App\Models\tugastambahan;
use Illuminate\Http\Request;

class TugastmbhnController extends Controller
{
    public function index()
    {
        $tgastambahan = tugastambahan::all();
        return view('tugas.index', compact('tgastambahan'));
    }

    public function create()
    {
        return view('tugas.create');
    }

    public function store(Request $request)
    {
       //dd($request->except(['_token','submit']));
        tugastambahan::create($request->except(['_token','submit']));
        return redirect('/tgstmbhn');
    }

    public function edit($id)
    {
        $tgastambahan = tugastambahan::find($id);
        return view('tugas.edit', compact(['tgastambahan']));
    }

    public function update($id, Request $request)
    {
        $tgastambahan = tugastambahan::find($id);
        $tgastambahan->update($request->except(['_token','submit']));
        return redirect('/tgstmbhn');
    }

    public function destroy($id)
    {
        $tgastambahan = tugastambahan::find($id);
        $tgastambahan->delete();
        return redirect('/tgstmbhn');
    }
}
