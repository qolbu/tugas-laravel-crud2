@extends('master')

@section('content')
 <!-- general form elements -->
<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Ajukan Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="/pertanyaan">
    @csrf
    <input type="hidden" name="tgl_dibuat" id="tgl_dibuat" value="{{$today}}">
    <input type="hidden" name="tgl_diperbaharui" id="tgl_diperbaharui" value="{{$today}}">
    <div class="card-body">
        <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul">
        </div>
        <div class="form-group">
        <label for="isi">Isi</label>
        <textarea class="form-control" rows="5" cols="30" id="isi" name="isi" placeholder="Masukan Isi Pertanyaan"></textarea>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>
<!-- /.card -->
@endsection