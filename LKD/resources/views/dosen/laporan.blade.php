<!DOCTYPE html>
<html>

<head>
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('/template/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset ('/template/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset ('/template/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->

  <style>
    #example2 {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #example2 td,
    #example2 th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #example2 tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #example2 tr:hover {
      background-color: #ddd;
    }

    #example2 th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #0292eb;
      color: white;
    }
  </style>
</head>

<body>

  <script>
    window.print();
  </script>

  <center>
    <h1>LAPORAN REKAP KEGIATAN DOSEN</h1>
    <h3>PROGRAM STUDI TEKNIK INFORMATIKA</h3>
    <h3>FAKULTAS TEKNIK</h3>
    <h3>UNIVERSITAS MUHAMMADIYAH BANJARMASIN</h3>

  </center>

  <right>
    No Sertifikat / NIDN : 180010020146 / 1126038901 <br>
    Nama : Finki Dona Marleny, M.Kom <br>
    Status : Dosen <br>
    Tahun Akademik : 2018/2019 <br>
    <br>
    <b>PENGAJARAN</b>
  </right>


  <table id="example2">
    <tr back>
      <th>No</th>
      <th>Kegiatan</th>
      <th>Bukti Penugasan</th>
      <th>SKS</th>
      <th>Bukti Dokumen</th>
    </tr>
    <tbody>
      @foreach($pengajaran as $pen)
    <tr>
    <td>{{$pen->id}}</td>
    <td>{{$pen->kegiatan}}</td>
    <td>{{$pen->bukti_penugasan}}</td>
    <td>{{$pen->sks}}</td>
    <td>{{$pen->bukti_dokumen}}</td>
    </tr>
    </tbody>
    @endforeach
  </table>

  <br>
  <br>
<right>
  <b>PENELITIAN</b>
</right>
  <table id="example2">
    <tr back>
      <th>No</th>
      <th>Kegiatan</th>
      <th>Bukti Penugasan</th>
      <th>SKS</th>
      <th>Bukti Dokumen</th>
    </tr>
    <tbody>
      @foreach($penelitian as $pel)
    <tr>
      <td>{{$pel->id}}</td>
      <td>{{$pel->kegiatan}}</td>
      <td>{{$pel->rincian_kegiatan}}</td>
      <td>{{$pel->sks}}</td>
      <td>{{$pel->bukti_dokumen}}</td>
    </tr>
    @endforeach
    </tbody>
  </table>

  <br>
  <br>
<right>
  <b>PENGABDIAN</b>
</right>
  <table id="example2">
    <tr back>
      <th>No</th>
      <th>Kegiatan</th>
      <th>Bukti Penugasan</th>
      <th>SKS</th>
      <th>Bukti Dokumen</th>
    </tr>
    <tbody>
    @foreach($pengabdian as $peng)
    <tr>
      <td>{{$peng->id}}</td>
      <td>{{$peng->kegiatan}}</td>
      <td>{{$peng->bukti_penugasan}}</td>
      <td>{{$peng->sks}}</td>
      <td>{{$peng->bukti_dokumen}}</td>
    </tr>
    @endforeach
    </tbody>
  </table>


  <script src="{{asset ('/template/adminlte/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->

  <!-- DataTables  & Plugins -->
  <script src="{{asset ('/template/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset ('/template/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>

  <script>
  </script>
</body>

</html>