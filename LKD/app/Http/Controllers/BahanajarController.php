<?php

namespace App\Http\Controllers;

use App\Models\bahanajar;
use Illuminate\Http\Request;

class BahanajarController extends Controller
{
    public function index()
    {
        $bhnajar = bahanajar::all();
        return view('bahanajr.index', compact('bhnajar'));
    }

    public function create()
    {
        return view('bahanajr.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        bahanajar::create($request->except(['_token','submit']));
        return redirect('/bahanajar');
    }

    public function edit($id)
    {
        $bhnajar = bahanajar::find($id);
        return view('bahanajr.edit', compact(['bhnajar']));
    }

    public function update($id, Request $request)
    {
        $bhnajar = bahanajar::find($id);
        $bhnajar->update($request->except(['_token','submit']));
        return redirect('/bahanajar');
    }

    public function destroy($id)
    {
        $bhnajar = bahanajar::find($id);
        $bhnajar->delete();
        return redirect('/bahanajar');
    }
}
