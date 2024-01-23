@extends('layout.master')

@section('judul')
<h3><u><br><br>Tambah Siswa</u></h3>
@endsection

@push('scripts')
<script src="{{asset('template/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('template/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#myTable").DataTable();
  });
</script>
@endpush


@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
@endpush

@section('content')
<table id="myTable" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>Nama Siswa</th>
      <th>Kelas</th>
      <th>status</th>
    </tr>
    </thead>
    <tbody>
    
    </tfoot>

</table>


@endsection

