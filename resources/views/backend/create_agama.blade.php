@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tambah Data Agama Desa </h1>
            </div><!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Form Data Agama Desa</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('admin.simpan_agama') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputagama">Agama</label>
                      <input type="text" class="form-control" id="inputagama" name="agama" placeholder="agama">
                      @error('agama')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="InputJumlah">Jumlah</label>
                        <input type="text" class="form-control" id="inputjumlah" name="jumlah" placeholder="jumlah">
                        @error('jumlah')
                        <small>{{ $message }}</small>
                        @enderror
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->

            </div>
            <!--/.col (left) -->
            <!-- right column -->
          
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

  </div>
    
@endsection
