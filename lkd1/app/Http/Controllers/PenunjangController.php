<?php

namespace App\Http\Controllers;

use App\Models\penunjang;
use Illuminate\Http\Request;

class PenunjangController extends Controller
{
    public function index()
    {
        $penunjang = penunjang::all();
        return view('dsen.index', compact('penunjang'));
    }

    public function create()
    {
        return view('dsen.create');
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token','submit']);

        if($file = $request->hasFile('bukti_penugasan')){

            $file = $request->file('bukti_penugasan');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path(). '/berkas';
            $file->move($destinationPath,$fileName);
            $data['bukti_penugasan'] = $file->getClientOriginalName();
        }

        penunjang::create($data);
        return redirect('/penunjang');
        $data = $request->except(['_token','submit']);

        if($file = $request->hasFile('bukti_dokumen')){

            $file = $request->file('bukti_dokumen');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path(). '/berkas';
            $file->move($destinationPath,$fileName);
            $data['bukti_dokumen'] = $file->getClientOriginalName();
        }

        penunjang::create($data);
        return redirect('/penunjang');
    }

    public function edit($id)
    {
        $penunjang = penunjang::find($id);
        return view('dsen.edit', compact(['penunjang']));
    }

    public function update($id, Request $request)
    {
        $penunjang = penunjang::find($id);
        $penunjang->update($request->except(['_token','submit']));
        return redirect('/penunjang');
    }

    public function destroy($id)
    {
        $penunjang = penunjang::find($id);
        $penunjang->delete();
        return redirect('/penunjang');
    }
}