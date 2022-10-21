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
                        <h3 class="card-title">Tugas Tambahan</h3>
                    </div>
                    <div class="card-body">
                        <a href="/tgstmbhn/create"><input type="submit" value="TAMBAH DATA" class="btn btn-success float-right"></a><br><br>
                        <table class="table table-bordered">
                            <tr>
                                <th>Tugas Tambahan</th>
                                <th>Unit Kerja</th>
                                <th>Instansi</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal berakhir</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($tgastambahan as $t)
                            <tr>
                                <td>{{$t->tugas_tambahan}}</td>
                                <td>{{$t->unit_kerja}}</td>
                                <td>{{$t->instansi}}</td>
                                <td>{{$t->tanggal_mulai}}</td>
                                <td>{{$t->tanggal_berakhir}}</td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="/tgstmbhn/{{$t->id}}/edit">
                                        Edit
                                    </a>
                                    <form action="/tgstmbhn/{{$t->id}}" method="POST">
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