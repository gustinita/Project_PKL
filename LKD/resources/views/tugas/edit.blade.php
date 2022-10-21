@extends('layout.mastercode')
@section('content')
<h1>Edit Data</h1>

<form action="/tgstmbhn/{{$tgastambahan->id}}" method="POST">
    @method('put')
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Tugas Tambahan</label><br>
            <input type="text" name="tugas_tambahan" class="form-control" placeholder="Tugas Tambahan" value="{{$tgastambahan->tugas_tambahan}}">
        </div>
        <div class="form-group">
            <label>Unit Kerja</label><br>
            <input type="text" name="unit_kerja" class="form-control" placeholder="Unit Kerja" value="{{$tgastambahan->unit_kerja}}">
        </div>
        <div class="form-group">
            <label>Instansi</label><br>
            <input type="text" name="instansi" class="form-control" placeholder="Instansi" value="{{$tgastambahan->instansi}}">
        </div>
        <div class="form-group">
            <label>Tanggal Mulai</label><br>
            <input type="date" name="tanggal_mulai" class="form-control" placeholder="Tanggal Mulai" value="{{$tgastambahan->tanggal_mulai}}">
        </div>
        <div class="form-group">
            <label>Tanggal Berakhir</label><br>
            <input type="date" name="tanggal_berakhir" class="form-control" placeholder="Tanggal Berakhir" value="{{$tgastambahan->tanggal_berakhir}}">
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-sm" value="Update">
</form>
@endsection