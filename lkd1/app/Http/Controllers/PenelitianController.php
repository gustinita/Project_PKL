<?php

namespace App\Http\Controllers;

use App\Models\penelitian;
use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    public function index()
    {
        $penelitian = penelitian::all();
        return view('dsn.index', compact(['penelitian']));
    }

    public function create()
    {
        return view('dsn.create');
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token','submit']);

        if($file = $request->hasFile('bukti_dokumen')){

            $file = $request->file('bukti_dokumen');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path(). '/berkas';
            $file->move($destinationPath,$fileName);
            $data['bukti_dokumen'] = $file->getClientOriginalName();
        }

        penelitian::create($data);
        return redirect('/penelitian');
    }

    public function edit($id)
    {
        $penelitian = penelitian::find($id);
        return view('dsn.edit', compact(['penelitian']));
    }

    public function update($id, Request $request)
    {
        $penelitian = penelitian::find($id);
        $penelitian->update($request->except(['_token','submit']));
        return redirect('/penelitian');
    }

    public function destroy($id)
    {
        $penelitian = penelitian::find($id);
        $penelitian->delete();
        return redirect('/penelitian');
    }
}
