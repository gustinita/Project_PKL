@extends('layout.mastercode')
@section('content')
<h1>Create Data</h1>

<form action="/tgstmbhn/store" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Tugas Tambahan</label><br>
            <input type="text" name="tugas_tambahan" class="form-control" placeholder="Tugas Tambahan">
        </div>
        <div class="form-group">
            <label>Unit Kerja</label><br>
            <input type="text" name="unit_kerja" class="form-control" placeholder="Unit Kerja">
        </div>
        <div class="form-group">
            <label>Instansi</label><br>
            <input type="text" name="instansi" class="form-control" placeholder="Instansi">
        </div>
        <div class="form-group">
            <label>Tanggal Mulai</label><br>
            <input type="date" name="tanggal_mulai" class="form-control" placeholder="Tanggal Mulai">
        </div>
        <div class="form-group">
            <label>Tanggal Berakhir</label><br>
            <input type="date" name="tanggal_berakhir" class="form-control" placeholder="Tanggal Berakhir">
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-sm" value="Save">
</form>
@endsection