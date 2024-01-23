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
<a href="/student/create" class="btn btn-primary btn-sm mb-4">Tambah Siswa</a> 
<table id="myTable" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>Nama Siswa</th>
      <th>Kelas</th>
      <th>status</th>
      <th>Aksi</th><br>
    </tr>
    @forelse ($students as $item)
    <thead>
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->class}}</td>
        <td>{{$item->status}}</td>
        <td>
            <form action="student/{{$item->id}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger btn-block btn-sm" value="Delete">
            </form>
        </td>
    </tr>
    </thead>
    
    @empty
    @endforelse

    </thead>
    <tbody>
    
    </tfoot>

</table>


@endsection

