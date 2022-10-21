<?php

namespace App\Http\Controllers;

use App\Models\datasering;
use Illuminate\Http\Request;

class DataseringController extends Controller
{
    public function index()
    {
        $datasrg = datasering::all();
        return view('datasring.index', compact(['datasrg']));
    }

    public function create()
    {
        return view('datasring.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        datasering::create($request->except(['_token','submit']));
        return redirect('/datasring');
    }

    public function edit($id)
    {
        $datasrg = datasering::find($id);
        return view('datasring.edit', compact(['datasrg']));
    }

    public function update($id, Request $request)
    {
        $datasrg = datasering::find($id);
        $datasrg->update($request->except(['_token','submit']));
        return redirect('/datasring');
    }

    public function destroy($id)
    {
        $datasrg = datasering::find($id);
        $datasrg->delete();
        return redirect('/datasring');
    }
}
