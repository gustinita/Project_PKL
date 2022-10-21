@extends('layout.mastercode')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">LAPORAN KINERJA DOSEN</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Biodata Dosen</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama Depan</th>
                                <th>Nama Belakang</th>
                                <th>Email</th>
                                <th>Jabatan</th>
                                <th>Tanggal Lahir</th>
                                <th>NIDN</th>
                                <th>NIP</th>
                                <th>Gelar Depan</th>
                                <th>Gelar Belakang</th>
                                <th>Jabatan Fungsional</th>
                                <th>Golongan</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($biodatadsn as $b)
                            <tr>
                                <td>{{$b->namadepan}}</td>
                                <td>{{$b->namabelakang}}</td>
                                <td>{{$b->email}}</td>
                                <td>{{$b->jabatan}}</td>
                                <td>{{$b->tanggallahir}}</td>
                                <td>{{$b->nidn}}</td>
                                <td>{{$b->nip}}</td>
                                <td>{{$b->gelardepan}}</td>
                                <td>{{$b->gelarbelakang}}</td>
                                <td>{{$b->jabatanfungsional}}</td>
                                <td>{{$b->golongan}}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="/biodatadsn/{{$b->id}}/edit">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection