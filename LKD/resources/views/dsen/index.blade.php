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
                        <h3 class="card-title">Penunjang</h3>
                    </div>
                    <div class="card-body">
                        <a href="/penunjang/create"><input type="submit" value="TAMBAH DATA" class="btn btn-success float-right"></a><br><br>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Kegiatan</th>
                                    <th>Bukti Penugasan</th>
                                    <th>SKS</th>
                                    <th>Bukti Dokumen</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($penunjang as $s)
                                <tr>
                                    <td>{{$s->kegiatan}}</td>
                                    <td>
                                        <center>
                                            <a href="berkas/{{$s->bukti_penugasan}}" class="btn btn-sm btn-primary" target="_blank"><i class="fas fa-file-pdf"> view</i></a>
                                        </center>
                                    </td>
                                    <td>{{$s->sks}}</td>
                                    <td>
                                        <center>
                                            <a href="berkas/{{$s->bukti_dokumen}}" class="btn btn-sm btn-primary" target="_blank"><i class="fas fa-file-pdf"> view</i></a>
                                        </center>
                                    </td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="/penunjang/{{$s->id}}/edit">
                                            Edit
                                        </a>
                                        <form action="/penunjang/{{$s->id}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection