<?php

namespace App\Http\Controllers;

use App\Models\pengajaran;
use Illuminate\Http\Request;

class PengajaranController extends Controller
{
    public function index()
    {
        $pengajaran = pengajaran::all();
        return view('pengajaran.index', compact('pengajaran'));
    }

    public function create()
    {
        return view('pengajaran.create');
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

        pengajaran::create($data);
        return redirect('/pengajaran');
        $data = $request->except(['_token','submit']);

        if($file = $request->hasFile('bukti_dokumen')){

            $file = $request->file('bukti_dokumen');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path(). '/berkas';
            $file->move($destinationPath,$fileName);
            $data['bukti_dokumen'] = $file->getClientOriginalName();
        }

        pengajaran::create($data);
        return redirect('/pengajaran');
    }

    public function edit($id)
    {
        $pengajaran = pengajaran::find($id);
        return view('pengajaran.edit', compact(['pengajaran']));
    }

    public function update($id, Request $request)
    {
        $pengajaran = pengajaran::find($id);
        $pengajaran->update($request->except(['_token','submit']));
        return redirect('/pengajaran');
    }

    public function destroy($id)
    {
        $pengajaran = pengajaran::find($id);
        $pengajaran->delete();
        return redirect('/pengajaran');
    }
}
