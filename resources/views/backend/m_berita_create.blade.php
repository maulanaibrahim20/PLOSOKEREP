@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tambah Berita Desa </h1>
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
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Form Berita Desa</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('admin.simpan_m_berita') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="title">Judul</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                      @error('title')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea name="desc" id="myeditor" cols="30" rows="10" class="form-control"></textarea>
                        @error('desc')
                          <small>{{ $message }}</small>
                        @enderror
                    </div>
                     
                    <div class="form-group col-md-12">
                      <label for="img">Gambar (Max 2MB):</label>
                      <input type="file" name="img" id="img" class="form-control">
                      <div class="mt-1">
                        <img src="" class="img-thumbnail image-preview" width="100px">
                      </div>
                      @error('img')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="form-group" style="width: 20%">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="" hidden>-- Pilih --</option>
                            <option value="1">Publish</option>
                            <option value="0">Private</option>
                        </select>
                        @error('status')
                          <small>{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group" style="width: 20%">
                        <label for="publish_date">Tanggal Terbit</label>
                        <input type="date" name="publish_date" id="publish_date" class="form-control">
                        @error('publish_date')
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

@push('js')
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{ csrf_token() }}',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{ csrf_token() }}',
    clipboard_handleImages: false
};

</script>

<script>
    CKEDITOR.replace('myeditor', options)

    $("#img").change(function(){
      previewImage(this);
    });

    function previewImage(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('.image-preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
</script>
@endpush
