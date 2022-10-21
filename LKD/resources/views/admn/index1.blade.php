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
                        <h3 class="card-title">Biodata Admin</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Jabatan</th>
                                <th>Tanggal Lahir</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($profiladmn as $p)
                            <tr>
                                <td>{{$p->nama}}</td>
                                <td>{{$p->email}}</td>
                                <td>{{$p->jabatan}}</td>
                                <td>{{$p->tanggallahir}}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="/profiladmn/{{$p->id}}/edit">
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
    </div>
</section>
@endsection