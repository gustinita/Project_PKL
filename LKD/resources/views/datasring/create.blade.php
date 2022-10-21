@extends('layout.mastercode')
@section('content')
<h1>Create Data</h1>

<form action="/datasring/store" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Perguruan Tinggi Sasaran</label><br>
            <input type="text" name="perguruan_tinggi_sasaran" class="form-control" placeholder="Perguruan Tinggi Sasaran">
        </div>
        <div class="form-group">
            <label>Bidang Tugas</label><br>
            <input type="text" name="bidang_tugas" class="form-control" placeholder="Bidang Tugas">
        </div>
        <div class="form-group">
            <label>No SK Penugasan</label><br>
            <input type="text" name="no_sk_penugasan" class="form-control" placeholder="No SK Penugasan">
        </div>
        <div class="form-group">
            <label>Tanggal SK Penugasan</label><br>
            <input type="date" name="tanggal_sk_penugasan" class="form-control" placeholder="Tanggal SK Penugasan">
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-sm" value="Save">
</form>
@endsection