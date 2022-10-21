@extends('layout.mastercode')
@section('content')
<h1>Edit Data</h1>
                                <form action="/profiladmn/{{$profiladmn->id}}" method="POST">
                                    @method('put')
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Nama</label><br>
                                            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$profiladmn->nama}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label><br>
                                            <input type="text" name="email" class="form-control" placeholder="Email" value="{{$profiladmn->email}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan</label><br>
                                            <input type="text" name="jabatan" class="form-control" placeholder="jabatan" value="{{$profiladmn->jabatan}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label><br>
                                            <input type="date" name="tanggallahir" class="form-control" placeholder="Tanggal Lahir" value="{{$profiladmn->tanggallahir}}">
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <button type="submit" name="submit" class="btn btn-info btn-sm">Update</button>
                                            <a href="/biodatadsn">
                                            </a>
                                </form>
                                @endsection
                            