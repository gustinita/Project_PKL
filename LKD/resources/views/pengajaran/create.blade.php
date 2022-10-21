@extends('layout.mastercode')
@section('content')
<h1>Create Data</h1>

<form action="/pengajaran/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Kegiatan</label><br>
            <input type="text" name="kegiatan" class="form-control" placeholder="Kegiatan">
        </div>
        <div class="form-group">
            <label>Bukti Penugasan</label><br>
            <input type="file" name="bukti_penugasan" class="form-control" >
        </div>
        <div class="form-group">
            <label>SKS</label><br>
            <input type="text" name="sks" class="form-control" placeholder="SKS">
        </div>
        <div class="form-group">
            <label>Bukti Dokumen</label><br>
            <input type="file" name="bukti_dokumen" class="form-control" >
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-sm" value="Save">
</form>
@endsection