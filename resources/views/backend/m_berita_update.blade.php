@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Berita Desa </h1>
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
                  <h3 class="card-title">Form Edit Berita Desa</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('admin.m_berita.update',['id' => $berita->id]) }}" method="POST" enctype="multipart/form-data">
                  @method('PUT')
                  @csrf
                  <input type="hidden" name="oldImg" value="{{ $berita->img }}">

                  <div class="card-body">
                    <div class="form-group">
                      <label for="title">Judul</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $berita->title) }}">
                      @error('title')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea name="desc" id="desc" cols="30" rows="10" class="form-control">{{ old('desc', $berita->desc) }}</textarea>
                        @error('desc')
                          <small>{{ $message }}</small>
                        @enderror
                    </div>
                     
                    <div class="form-group">
                      <label for="img">Gambar (Max 2MB):</label>
                      <input type="file" name="img" id="img" class="form-control">
                      <div class="mt-1">
                        <small>Gambar Lama</small> <br>
                        <img src="{{ asset('storage/gambar/berita/'.$berita->img) }}" alt="" width="30px">
                      </div>
                      @error('img')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="" hidden>-- Pilih --</option>
                            <option value="1" {{ $berita->status == 1 ? 'selected' : null }}>Publish</option>
                            <option value="0" {{ $berita->status == 0 ? 'selected' : null }}>Private</option>
                        </select>
                        @error('status')
                          <small>{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="publish_date">Tanggal Terbit</label>
                        <input type="date" name="publish_date" id="publish_date" class="form-control" value="{{ old('publish_date', $berita->publish_date) }}">
                        @error('publish_date')
                          <small>{{ $message }}</small>
                        @enderror
                    </div>

                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
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
