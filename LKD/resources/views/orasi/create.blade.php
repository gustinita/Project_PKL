@extends('layout.mastercode')
@section('content')
<h1>Create Data</h1>

<form action="/orasilmiah/store" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Kategori Kegiatan</label><br>
            <input type="text" name="kategori_kegiatan" class="form-control" placeholder="Kategori Kegiatan">
        </div>
        <div class="form-group">
            <label>Judul Makalah</label><br>
            <input type="text" name="judul_makalah" class="form-control" placeholder="Judul Makalah">
        </div>
        <div class="form-group">
            <label>Nama Temu Ilmiah</label><br>
            <input type="text" name="nama_temu_ilmiah" class="form-control" placeholder="Nama Temu Ilmiah">
        </div>
        <div class="form-group">
            <label>Penyelenggara</label><br>
            <input type="text" name="penyelenggara" class="form-control" placeholder="Penyelenggara">
        </div>
        <div class="form-group">
            <label>Tanggal Pelaksanaan</label><br>
            <input type="date" name="tanggal_pelaksanaan" class="form-control" placeholder="Tanggal Pelaksanaan">
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-sm" value="Save">
</form>
@endsection