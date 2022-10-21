<?php

namespace App\Http\Controllers;

use App\Models\profiladmn;
use Illuminate\Http\Request;

class ProfiladmnController extends Controller
{
    public function index1()
    {
        $profiladmn = profiladmn::all();
        return view('admn.index1',compact(["profiladmn"]));
    }

    public function edit($id)
    {
        $profiladmn = profiladmn::find($id);
        return view('admn.edit', compact(['profiladmn']));
    }

    public function update($id, Request $request)
    {
        $profiladmn = profiladmn::find($id);
        $profiladmn->update($request->except(['_token','submit']));
        return redirect('/profiladmn');
    }

}