@extends('layout.mastercode')
@section('content')
<h1>Create Data</h1>

<form action="/bahanajar/store" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Judul Bahan Ajar</label><br>
            <input type="text" name="judul_bahan_ajar" class="form-control" placeholder="Judul Bahan Ajar">
        </div>
        <div class="form-group">
            <label>ISBN</label><br>
            <input type="text" name="isbn" class="form-control" placeholder="ISBN">
        </div>
        <div class="form-group">
            <label>Tanggal Terbit</label><br>
            <input type="date" name="tanggal_terbit" class="form-control" placeholder="Tanggal Terbit">
        </div>
        <div class="form-group">
            <label>Penerbit</label><br>
            <input type="text" name="penerbit" class="form-control" placeholder="penerbit">
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-sm" value="Save">
</form>
@endsection