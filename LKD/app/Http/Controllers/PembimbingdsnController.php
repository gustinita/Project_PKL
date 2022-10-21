<?php

namespace App\Http\Controllers;

use App\Models\pembimbingdosen;
use Illuminate\Http\Request;

class PembimbingdsnController extends Controller
{
    public function index()
    {
        $pembdosen = pembimbingdosen::all();
        return view('pembimbing.index', compact('pembdosen'));
    }

    public function create()
    {
        return view('pembimbing.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        pembimbingdosen::create($request->except(['_token','submit']));
        return redirect('/pembdsn');
    }

    public function edit($id)
    {
        $pembdosen = pembimbingdosen::find($id);
        return view('pembimbing.edit', compact(['pembdosen']));
    }

    public function update($id, Request $request)
    {
        $pembdosen = pembimbingdosen::find($id);
        $pembdosen->update($request->except(['_token','submit']));
        return redirect('/pembdsn');
    }

    public function destroy($id)
    {
        $pembdosen = pembimbingdosen::find($id);
        $pembdosen->delete();
        return redirect('/pembdsn');
    }
}
