@extends('layout.mastercode')
@section('content')
<h1>Edit Data</h1>

<form action="/biodatadsn/{{$biodatadsn->id}}" method="POST">
    @method('put')
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Nama Depan</label><br>
            <input type="text" name="namadepan" class="form-control" placeholder="Nama Depan" value="{{$biodatadsn->namadepan}}">
        </div>
        <div class="form-group">
            <label>Nama Belakang</label><br>
            <input type="text" name="namabelakang" class="form-control" placeholder="Nama Belakang" value="{{$biodatadsn->namabelakang}}">
        </div>
        <div class="form-group">
            <label>Email</label><br>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{$biodatadsn->email}}">
        </div>
        <div class="form-group">
            <label>Jabatan</label><br>
            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="{{$biodatadsn->jabatan}}">
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label><br>
            <input type="date" name="tanggallahir" class="form-control" placeholder="Tanggal Lahir" value="{{$biodatadsn->tanggallahir}}">
        </div>
        <div class="form-group">
            <label>NIDN</label><br>
            <input type="text" name="nidn" class="form-control" placeholder="NIDN" value="{{$biodatadsn->nidn}}">
        </div>
        <div class="form-group">
            <label>NIP</label><br>
            <input type="text" name="nip" class="form-control" placeholder="NIP" value="{{$biodatadsn->nip}}">
        </div>
        <div class="form-group">
            <label>Gelar Depan</label><br>
            <input type="text" name="gelardepan" class="form-control" placeholder="Gelar Depan" value="{{$biodatadsn->gelardepan}}">
        </div>
        <div class="form-group">
            <label>Gelar Belakang</label><br>
            <input type="text" name="gelarbelakang" class="form-control" placeholder="Gelar Belakang" value="{{$biodatadsn->gelarbelakang}}">
        </div>
        <div class="form-group">
            <label>Jabatan Fungsional</label><br>
            <input type="text" name="jabatanfungsional" class="form-control" placeholder="Jabatan Fungsional" value="{{$biodatadsn->jabatanfungsional}}">
        </div>
        <div class="form-group">
            <label>Golongan</label><br>
            <input type="text" name="golongan" class="form-control" placeholder="Golongan" value="{{$biodatadsn->golongan}}">
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-info btn-sm">Update</button>
            <a href="/biodatadsn">
            </a>
</form>
@endsection