@extends('layout.mastercode')
@section('content')
<h1>Create Data</h1>

<form action="/pngguna/store" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Nama</label><br>
            <input type="text" name="nama" class="form-control" placeholder="Nama">
        </div>
        <div class="form-group">
            <label>Email</label><br>
            <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <label>Level</label><br>
            <input type="text" name="level" class="form-control" placeholder="Level">
        </div>
        <input type="submit" name="submit" class="btn btn-info btn-sm" value="Save">
</form>
@endsection