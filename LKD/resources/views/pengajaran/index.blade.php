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
                        <h3 class="card-title">Pengajaran</h3>
                    </div>
                    <div class="card-body">
                        <a href="/pengajaran/create"><input type="submit" value="TAMBAH DATA" class="btn btn-success float-right"></a><br><br>
                        <table class="table table-bordered">
                            <tr>
                                <th>Kegiatan</th>
                                <th>Bukti Penugasan</th>
                                <th>SKS</th>
                                <th>Bukti Dokumen</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($pengajaran as $n)
                            <tr>
                                <td>{{$n->kegiatan}}</td>
                                <td>
                                <center>
                                    <a href="berkas/{{$n->bukti_penugasan}}" class="btn btn-sm btn-primary" target="_blank"><i
                                            class="fas fa-file-pdf"> view</i></a>
                                </center>
                            </td>
                                <td>{{$n->sks}}</td>
                                <td>
                                <center>
                                    <a href="berkas/{{$n->bukti_dokumen}}" class="btn btn-sm btn-primary" target="_blank"><i
                                            class="fas fa-file-pdf"> view</i></a>
                                </center>
                                </td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="/penelitian/{{$n->id}}/edit">
                                        Edit
                                    </a>
                                    <form action="/pengajaran/{{$n->id}}" method="POST">
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