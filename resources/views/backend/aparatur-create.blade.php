@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tambah Aparatur Desa </h1>
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
                  <h3 class="card-title">Form Aparatur Desa</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('admin.store2') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputNama">Nama</label>
                      <input type="text" class="form-control" id="inputnama" name="nama" placeholder="Nama">
                      @error('nama')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="InputJabatan">Jabatan</label>
                        <input type="text" class="form-control" id="inputJabatan" name="jabatan" placeholder="Jabatan">
                        @error('jabatan')
                        <small>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="InputNohp">NO.HP</label>
                      <input type="text" class="form-control" id="InputNohp" name="no.hp" placeholder="No.HP">
                      @error('no.hp')
                      <small>{{ $message }}</small>
                      @enderror
                  </div>
                    <div class="form-group">
                      <label for="gambar">Gambar:</label>
                      <input type="file" name="gambar" id="gambar" required>
                      @error('gambar')
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
