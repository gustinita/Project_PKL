@extends('layout.mastercode')
@section('content')
<h1>Create Data</h1>

<form action="/pengmhs/store" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Nama Mahasiswa</label><br>
            <input type="text" name="nama_mhs" class="form-control" placeholder="Nama Mahasiswa">
        </div>
        <div class="form-group">
            <label>NPM</label><br>
            <input type="text" name="npm" class="form-control" placeholder="NPM">
        </div>
        <div class="form-group">
            <label>Judul Pengujian</label><br>
            <input type="text" name="judul_pengujian" class="form-control" placeholder="Judul Pengujian">
        </div>
        <div class="form-group">
            <label>Jenis Pengujian</label><br>
            <input type="text" name="jenis_pengujian" class="form-control" placeholder="Jenis Pengujian">
        </div>
        <div class="form-group">
            <label>Program Studi</label><br>
            <input type="text" name="program_studi" class="form-control" placeholder="Program Studi">
        </div>
        <div class="form-group">
            <label>Tanggal Pengujian</label><br>
            <input type="date" name="tanggal_pengujian" class="form-control" placeholder="Tanggal Pengujian">
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-sm" value="Save">
</form>
@endsection