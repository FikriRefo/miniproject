@extends('layout.master')

@section('judul')
<h3><u><br><br>Tambah Siswa</u></h3>
@endsection

@section('content')
<form action="/student" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label >Nama Siswa</label>
      <input type="text" name="name" class="form-control">
    </div>
    @error('name')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    
    <div class="form-group">
        <label>Kelas</label>
        <select name="class" class="form-control">
            <option value="">--Pilih Kelas--</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>   
        </select>  
        @error('class')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="1">Aktif</option>
            <option value="0">Non-Aktif</option>  
        </select>  
        @error('status')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    
    @error('deskripsi')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Submit</button>
       
</form>
@endsection

