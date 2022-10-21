@extends('layout.mastercode')
@section('content')
<h1>Edit Data</h1>

<form action="/datasring/{{$datasrg->id}}" method="POST">
    @method('put')
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Perguruan Tinggi Sasaran</label><br>
            <input type="text" name="perguruan_tinggi_sasaran" class="form-control" placeholder="Perguruan Tinggi Sasaran" value="{{$datasrg->perguruan_tinggi_sasaran}}">
        </div>
        <div class="form-group">
            <label>Bidang Tugas</label><br>
            <input type="text" name="bidang_tugas" class="form-control" placeholder="Bidang Tugas" value="{{$datasrg->bidang_tugas}}">
        </div>
        <div class="form-group">
            <label>No SK Penugasan</label><br>
            <input type="text" name="no_sk_penugasan" class="form-control" placeholder="No SK Penugasan" value="{{$datasrg->no_sk_penugasan}}">
        </div>
        <div class="form-group">
            <label>Tanggal SK Penugasan</label><br>
            <input type="date" name="tanggal_sk_penugasan" class="form-control" placeholder="Tanggal SK Penugasan" value="{{$datasrg->tanggal_sk_penugasan}}">
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-sm" value="Update">
</form>
@endsection