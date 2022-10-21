@extends('layout.mastercode')
@section('content')
<h1>Create Data</h1>

<form action="/penelitian/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Kegiatan</label><br>
            <input type="text" name="kegiatan" class="form-control" placeholder="Kegiatan">
        </div>
        <div class="form-group">
            <label>Rincian Kegiatan</label><br>
            <input type="text" name="rincian_kegiatan" class="form-control" placeholder="Rincian Kegiatan">
        </div>
        <div class="form-group">
            <label>SKS</label><br>
            <input type="text" name="sks" class="form-control" placeholder="SKS">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Bukti Dokumen</label><br>
            <input type="file" name="bukti_dokumen" class="form-control" >
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-sm" value="Save">
</form>
@endsection