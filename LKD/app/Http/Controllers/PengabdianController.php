<?php

namespace App\Http\Controllers;

use App\Models\pengabdian;
use Illuminate\Http\Request;

class PengabdianController extends Controller
{
    public function index()
    {
        $pengabdian = pengabdian::all();
        return view('dosn.index', compact(['pengabdian']));
    }

    public function create()
    {
        return view('dosn.create');
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

        pengabdian::create($data);
        return redirect('/pengabdian');
        $data = $request->except(['_token','submit']);

        if($file = $request->hasFile('bukti_dokumen')){

            $file = $request->file('bukti_dokumen');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path(). '/berkas';
            $file->move($destinationPath,$fileName);
            $data['bukti_dokumen'] = $file->getClientOriginalName();
        }

        pengabdian::create($data);
        return redirect('/pengabdian');
    }

    public function edit($id)
    {
        $pengabdian = pengabdian::find($id);
        return view('dosn.edit', compact(['pengabdian']));
    }

    public function update($id, Request $request)
    {
        $pengabdian = pengabdian::find($id);
        $pengabdian->update($request->except(['_token','submit']));
        return redirect('/pengabdian');
    }

    public function destroy($id)
    {
        $pengabdian = pengabdian::find($id);
        $pengabdian->delete();
        return redirect('/pengabdian');
    }
}