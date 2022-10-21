@extends('layout.mastercode')
@section('content')
<h1>Edit Data</h1>

<form action="/bimbmhs/{{$bimbingan->id}}" method="POST">
    @method('put')
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Nama Mahasiswa</label><br>
            <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Nama Mahasiswa" value="{{$bimbingan->nama_mahasiswa}}">
        </div>
        <div class="form-group">
            <label>NPM</label><br>
            <input type="text" name="npm" class="form-control" placeholder="NPM" value="{{$bimbingan->npm}}">
        </div>
        <div class="form-group">
            <label>Judul Bimbingan</label><br>
            <input type="text" name="judul_bimbingan" class="form-control" placeholder="Judul Bimbingan" value="{{$bimbingan->judul_bimbingan}}">
        </div>
        <div class="form-group">
            <label>Jenis Bimbingan</label><br>
            <input type="text" name="jenis_bimbingan" class="form-control" placeholder="Jenis Bimbingan" value="{{$bimbingan->jenis_bimbingan}}">
        </div>
        <div class="form-group">
            <label>Program Studi</label><br>
            <input type="text" name="program_studi" class="form-control" placeholder="Program Studi" value="{{$bimbingan->program_studi}}">
        </div>
        <div class="form-group">
            <label>Tanggal Bimbingan</label><br>
            <input type="date" name="tanggal_bimbingan" class="form-control" placeholder="Tanggal Bimbingan" value="{{$bimbingan->tanggal_bimbingan}}">
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-sm" value="Update">
</form>
@endsection