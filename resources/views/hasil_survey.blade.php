    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Survey Data Center</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css2/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    </head>
    <body>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <d class="card">
                        <div class="card-header">
                        <h2 class="card-title">Data Aproval Permit Survey</h2>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Visitor</th>
                                    <th>Date</th>
                                    <th>Purpose</th>
                                    <th>Detail</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($survey as $p)
                                        <tr>
                                                <td>{{ $p->survey_id }}</td>
                                                <td>{{ $p->visitor_name }}</td>
                                                <td>{{ $p->created_at }}</td>
                                                <td>{{ $p->purpose_work }}</td>
                                                <td>{{ $p->purpose_work }}</td>
                                                <td>{{ $p->purpose_work }}</td>
                                                <td>{{ $p->purpose_work }}</td>
                                                <td>{{ $p->purpose_work }}</td>
                                                <td>aprove disini</td>
                                                <td><a href="/survey_pdf" class="btn btn-primary" target="_blank">LIHAT PDF</a></td>
                                        </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": true,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

        {{-- <style type="text/css">
            .pagination li{
                float: left;
                list-style-type: none;
                margin:5px;
            }
        </style> --}}

        {{-- <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="section-title">Tabel Proses Approval</h2>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Visitor</th>
                                        <th>Date</th>
                                        <th>Purpose</th>
                                        <th>Reviewed</th>
                                        <th>Checked</th>
                                        <th>Security</th>
                                        <th>Head. Dept</th>
                                        <th>Aprove</th>
                                        <th>File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($survey as $p)
                                            <tr>
                                                    <td>{{ $p->survey_id }}</td>
                                                    <td>{{ $p->visitor_name }}</td>
                                                    <td>{{ $p->created_at }}</td>
                                                    <td>{{ $p->purpose_work }}</td>
                                                    <td>{{ $p->purpose_work }}</td>
                                                    <td>{{ $p->purpose_work }}</td>
                                                    <td>{{ $p->purpose_work }}</td>
                                                    <td>{{ $p->purpose_work }}</td>
                                                    <td>aprove disini</td>
                                                    <td><a href="/survey_pdf" class="btn btn-primary" target="_blank">LIHAT PDF</a></td>
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

        <p>Halaman : {{ $survey->currentPage() }}</p> <br/>
        <p>Jumlah Data : {{ $survey->total() }} </p><br/>
        <p> Per Halaman : {{ $survey->perPage() }} </p><br/>


        {{ $survey->links() }} --}}

    </body>
    </html>
