@extends('layout.mastercode')
@section('content')
<h1>Create Data</h1>

<form action="/bimbmhs/store" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Nama Mahasiswa</label><br>
            <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Nama Mahasiswa">
        </div>
        <div class="form-group">
            <label>NPM</label><br>
            <input type="text" name="npm" class="form-control" placeholder="NPM">
        </div>
        <div class="form-group">
            <label>Judul Bimbingan</label><br>
            <input type="text" name="judul_bimbingan" class="form-control" placeholder="Judul Bimbingan">
        </div>
        <div class="form-group">
            <label>Jenis Bimbingan</label><br>
            <input type="text" name="jenis_bimbingan" class="form-control" placeholder="Jenis Bimbingan">
        </div>
        <div class="form-group">
            <label>Program Studi</label><br>
            <input type="text" name="program_studi" class="form-control" placeholder="Program Studi">
        </div>
        <div class="form-group">
            <label>Tanggal Bimbingan</label><br>
            <input type="date" name="tanggal_bimbingan" class="form-control" placeholder="Tanggal Bimbingan">
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-sm" value="Save">
</form>
@endsection