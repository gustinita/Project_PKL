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
                        <h3 class="card-title">Pembimbing Dosen</h3>
                    </div>
                    <div class="card-body">
                        <a href="/pembdsn/create"><input type="submit" value="TAMBAH DATA" class="btn btn-success float-right"></a><br><br>
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama Pembimbing</th>
                                <th>Nama Bimbingan</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($pembdosen as $m)
                            <tr>
                                <td>{{$m->nama_pembimbing}}</td>
                                <td>{{$m->nama_bimbingan}}</td>
                                <td>{{$m->tanggal_mulai}}</td>
                                <td>{{$m->tanggal_selesai}}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="/pembdsn/{{$m->id}}/edit">
                                        Edit
                                    </a>
                                    <form action="/pembdsn/{{$m->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                        </a>
                                    </form>
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