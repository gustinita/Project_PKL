@extends('layout.mastercode')
@section('content')
<h1>Edit Data</h1>

<form action="/pembdsn/{{$pembdosen->id}}" method="POST">
    @method('put')
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Nama Pembimbing</label><br>
            <input type="text" name="nama_pembimbing" class="form-control" placeholder="Nama Pembimbing" value="{{$pembdosen->nama_pembimbing}}">
        </div>
        <div class="form-group">
            <label>Nama Bimbingan</label><br>
            <input type="text" name="nama_bimbingan" class="form-control" placeholder="Nama Bimbingan" value="{{$pembdosen->nama_bimbingan}}">
        </div>
        <div class="form-group">
            <label>Tanggal Mulai</label><br>
            <input type="date" name="tanggal_mulai" class="form-control" placeholder="Tanggal Mulai" value="{{$pembdosen->tanggal_mulai}}">
        </div>
        <div class="form-group">
            <label>Tanggal Selesai</label><br>
            <input type="date" name="tanggal_selesai" class="form-control" placeholder="Tanggal Selesai" value="{{$pembdosen->tanggal_selesai}}">
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-sm" value="Update">
</form>
@endsection