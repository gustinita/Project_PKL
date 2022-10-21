@extends('layout.mastercode')
@section('content')
<h1>Edit Data</h1>

<form action="/orasilmiah/{{$orasilmiah->id}}" method="POST">
    @method('put')
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Kategori Kegiatan</label><br>
            <input type="text" name="kategori_kegiatan" class="form-control" placeholder="Kategori Kegiatan" value="{{$orasilmiah->kategori_kegiatan}}">
        </div>
        <div class="form-group">
            <label>Judul Makalah</label><br>
            <input type="text" name="judul_makalah" class="form-control" placeholder="Judul Makalah" value="{{$orasilmiah->judul_makalah}}">
        </div>
        <div class="form-group">
            <label>Nama Temu Ilmiah</label><br>
            <input type="text" name="nama_temu_ilmiah" class="form-control" placeholder="Nama Temu Makalah" value="{{$orasilmiah->nama_temu_ilmiah}}">
        </div>
        <div class="form-group">
            <label>Penyelenggara</label><br>
            <input type="text" name="penyelenggara" class="form-control" placeholder="penyelenggara" value="{{$orasilmiah->penyelenggara}}">
        </div>
        <div class="form-group">
            <label>Tanggal Pelaksanaan</label><br>
            <input type="date" name="tanggal_pelaksanaan" class="form-control" placeholder="Tanggal Pelaksanaan" value="{{$orasilmiah->tanggal_pelaksanaan}}">
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-sm" value="Update">
</form>
@endsection