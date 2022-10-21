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
                        <h3 class="card-title">Datasering</h3>
                    </div>
                    <div class="card-body">
                        <a href="/datasring/create"><input type="submit" value="TAMBAH DATA" class="btn btn-success float-right"></a><br><br>
                        <table class="table table-bordered">
                                <th>Perguruan Tinggi Sasaran</th>
                                <th>Bidang Tugas</th>
                                <th>No SK Penugasan</th>
                                <th>Tanggal SK Penugasan</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($datasrg as $g)
                            <tr>
                                <td>{{$g->perguruan_tinggi_sasaran}}</td>
                                <td>{{$g->bidang_tugas}}</td>
                                <td>{{$g->no_sk_penugasan}}</td>
                                <td>{{$g->tanggal_sk_penugasan}}</td>
                                <td>
                                <a class="btn btn-info btn-sm" href="/datasring/{{$g->id}}/edit">
                                        Edit
                                    </a>
                                    <form action="/datasring/{{$g->id}}" method="POST">
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