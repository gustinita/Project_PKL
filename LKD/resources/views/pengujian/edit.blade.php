@extends('layout.mastercode')
@section('content')
<h1>Edit Data</h1>

<form action="/pengmhs/{{$pengujian->id}}" method="POST">
    @method('put')
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Nama Mahasiswa</label><br>
            <input type="text" name="nama_mhs" class="form-control" placeholder="Nama Mahasiswa" value="{{$pengujian->nama_mhs}}">
        </div>
        <div class="form-group">
            <label>NPM</label><br>
            <input type="text" name="npm" class="form-control" placeholder="NPM" value="{{$pengujian->npm}}">
        </div>
        <div class="form-group">
            <label>Judul Pengujian</label><br>
            <input type="text" name="judul_pengujian" class="form-control" placeholder="Judul Pengujian" value="{{$pengujian->judul_pengujian}}">
        </div>
        <div class="form-group">
            <label>Jenis Pengujian</label><br>
            <input type="text" name="jenis_pengujian" class="form-control" placeholder="Jenis Pengujian" value="{{$pengujian->jenis_pengujian}}">
        </div>
        <div class="form-group">
            <label>Program Studi</label><br>
            <input type="text" name="program_studi" class="form-control" placeholder="Program Studi" value="{{$pengujian->program_studi}}">
        </div>
        <div class="form-group">
            <label>Tanggal Pengujian</label><br>
            <input type="date" name="tanggal_pengujian" class="form-control" placeholder="Tanggal Pengujian" value="{{$pengujian->tanggal_pengujian}}">
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-sm" value="Update">
</form>
@endsection