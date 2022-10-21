@extends('layout.mastercode')
@section('content')
<h1>Edit Data</h1>

<form action="/pengajaran/{{$pengajaran->id}}" method="POST">
    @method('put')
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Kegiatan</label><br>
            <input type="text" name="kegiatan" class="form-control" placeholder="Kegiatan" value="{{$pengajaran->kegiatan}}">
        </div>
        <div class="form-group">
            <label>Bukti Penugasan</label><br>
            <input type="text" name="bukti_penugasan" class="form-control" placeholder="Bukti Penugasan" value="{{$pengajaran->bukti_penugasan}}">
        </div>
        <div class="form-group">
            <label>SKS</label><br>
            <input type="text" name="sks" class="form-control" placeholder="SKS" value="{{$pengajaran->sks}}">
        </div>
        <div class="form-group">
            <label>Bukti Dokumen</label><br>
            <input type="text" name="bukti_dokumen" class="form-control" placeholder="Bukti Dokumen" value="{{$pengajaran->bukti_dokumen}}">
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-sm" value="Update">
</form>
@endsection