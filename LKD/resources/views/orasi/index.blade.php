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
                        <h3 class="card-title">Orasi Ilmiah</h3>
                    </div>
                    <div class="card-body">
                        <a href="/orasilmiah/create"><input type="submit" value="TAMBAH DATA" class="btn btn-success float-right"></a><br><br>
                        <table class="table table-bordered">
                            <tr>
                                <th>Kategori Kegiatan</th>
                                <th>Judul Makalah</th>
                                <th>Nama Temu Ilmiah</th>
                                <th>Penyelenggara</th>
                                <th>Tanggal Pelaksanaan</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($orasilmiah as $o)
                            <tr>
                                <td>{{$o->kategori_kegiatan}}</td>
                                <td>{{$o->judul_makalah}}</td>
                                <td>{{$o->nama_temu_ilmiah}}</td>
                                <td>{{$o->penyelenggara}}</td>
                                <td>{{$o->tanggal_pelaksanaan}}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="/orasilmiah/{{$o->id}}/edit">
                                        Edit
                                    </a>
                                    <form action="/orasilmiah/{{$o->id}}" method="POST">
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