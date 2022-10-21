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
                        <h3 class="card-title">Bimbingan Mahasiswa</h3>
                    </div>
                    <div class="card-body">
                        <a href="/bimbmhs/create"><input type="submit" value="TAMBAH DATA" class="btn btn-success float-right"></a><br><br>
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama Mahasiswa</th>
                                <th>NPM</th>
                                <th>Judul Bimbingan</th>
                                <th>Jenis Bimbingan</th>
                                <th>Program Studi</th>
                                <th>Tanggal Bimbingan</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($bimbingan as $b)
                            <tr>
                                <td>{{$b->nama_mahasiswa}}</td>
                                <td>{{$b->npm}}</td>
                                <td>{{$b->judul_bimbingan}}</td>
                                <td>{{$b->jenis_bimbingan}}</td>
                                <td>{{$b->program_studi}}</td>
                                <td>{{$b->tanggal_bimbingan}}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="/bimbmhs/{{$b->id}}/edit">
                                        Edit
                                    </a>
                                    <form action="/bimbmhs/{{$b->id}}" method="POST">
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