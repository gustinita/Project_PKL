<?php

namespace App\Http\Controllers;

use App\Models\biodatadsn;
use Illuminate\Http\Request;

class BiodatadsnController extends Controller
{
    public function index(){
        $biodatadsn = biodatadsn::all();
        return view('biodataa.index', compact(['biodatadsn']));
    }


    public function edit($id)
    {
        $biodatadsn = biodatadsn::find($id);
        return view('biodataa.edit',compact(['biodatadsn']));
    }

    public function update($id, Request $request)
    {
        $biodatadsn = biodatadsn::find($id);
        $biodatadsn->update($request->except(['_token','submit']));
        return redirect('biodatadsn');
    }

}
