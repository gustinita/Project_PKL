@extends('layout.mastercode')
@section('content')
<h1>Edit Data</h1>

<form action="/bahanajar/{{$bhnajar->id}}" method="POST">
    @method('put')
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Judul Bahan Ajar</label><br>
            <input type="text" name="judul_bahan_ajar" class="form-control" placeholder="Judul Bahan Ajar" value="{{$bhnajar->judul_bahan_ajar}}">
        </div>
        <div class="form-group">
            <label>ISBN</label><br>
            <input type="text" name="isbn" class="form-control" placeholder="ISBN" value="{{$bhnajar->isbn}}">
        </div>
        <div class="form-group">
            <label>Tanggal Terbit</label><br>
            <input type="date" name="tanggal_terbit" class="form-control" placeholder="Tanggal Terbit" value="{{$bhnajar->tanggal_terbit}}">
        </div>
        <div class="form-group">
            <label>Penerbit</label><br>
            <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" value="{{$bhnajar->penerbit}}">
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-sm" value="Update">
</form>
@endsection