@extends('layout.mastercode')
@section('content')
<h1>Edit Data</h1>

<form action="/pngguna/{{$pngguna->id}}" method="POST">
    @method('put')
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Nama</label><br>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$pngguna->nama}}">
        </div>
        <div class="form-group">
            <label>Email</label><br>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{$pngguna->email}}">
        </div>
        <div class="form-group">
            <label>Level</label><br>
            <input type="text" name="level" class="form-control" placeholder="Level" value="{{$pngguna->level}}">
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-info btn-sm">Update</button>
            <a href="/pngguna">
            </a>
</form>
@endsection