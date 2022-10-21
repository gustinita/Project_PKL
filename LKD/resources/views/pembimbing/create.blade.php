@extends('layout.mastercode')
@section('content')
<h1>Create Data</h1>

<form action="/pembdsn/store" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Nama Pembimbing</label>
            <input type="text" name="nama_pembimbing" class="form-control" placeholder="Nama Pembimbing">
        </div>
        <div class="form-group">
            <label>Nama Bimbingan</label>
            <input type="text" name="nama_bimbingan" class="form-control" placeholder="Nama Bimbingan">
        </div>
        <div class="form-group">
            <label>Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" class="form-control" placeholder="Tanggal Mulai">
        </div>
        <div class="form-group">
            <label>Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" class="form-control" placeholder="Tanggal Selesai">
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-sm" value="Save">
</form>
@endsection