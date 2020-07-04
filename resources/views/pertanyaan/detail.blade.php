@extends('master')

@section('content')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Pertanyaan</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pertanyaan</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">{{$rows->judul}}</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">{{$rows->judul}}</h6>
                <p class="card-text">{{$rows->isi}}</p>
              </div>
            </div>

            @if(isset($jawaban))
                @foreach ($jawaban as $r)
              <div class="card card-danger card-outline">
                <div class="card-body">
                  <p class="card-text">{{$r->isi}}</p>
                </div>
              </div>
                @endforeach
              @endif
              
              

            <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Ajukan Jawaban</h3>
            </div>
            <form role="form" method="POST" action="/jawaban">
            @csrf
            <input type="hidden" name="tgl_dibuat" id="tgl_dibuat" value="{{$today}}">
            <input type="hidden" name="tgl_diperbaharui" id="tgl_diperbaharui" value="{{$today}}">
            <input type="hidden" name="pertanyaan_id" id="pertanyaan_id" value="{{$rows->id}}">
            <div class="card-body">
                <div class="form-group">
                <label for="isi">Isi</label>
                <textarea class="form-control" rows="5" cols="30" id="isi" name="isi" placeholder="Masukan Isi Jawaban"></textarea>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection