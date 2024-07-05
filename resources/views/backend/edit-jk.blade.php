@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Data Jenis Kelamin Desa</h1>
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
                  <h3 class="card-title">Form Data Jenis Kelamin Desa</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('admin.jk.update', ['id' => $data->id]) }}" method="POST">
                  @csrf
                  @method("PUT")
                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputjk">Jenis Kelamin</label>
                      <input type="text" class="form-control" id="inputjk" name="jk" value={{$data->jk}} placeholder="jk">
                      @error('jk')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="Inputjumlah">jumlah</label>
                        <input type="text" class="form-control" id="inputjumlah" name="jumlah" value={{$data->jumlah}} placeholder="jumlah">
                        @error('jumlah')
                        <small>{{ $message }}</small>
                        @enderror
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
