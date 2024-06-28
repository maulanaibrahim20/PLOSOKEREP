@extends('layout.umkm_main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Produk </h1>
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
                  <h3 class="card-title">Form Edit Produk</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('umkm.produk.update', ['id' => $products->id]) }}" method="POST" enctype="multipart/form-data">
                  @method('PUT')
                  @csrf
                  <input type="hidden" name="oldImg" value="{{ $products->img_produk }}">

                  <div class="card-body">
                    <div class="form-group">
                        <label for="sku">SKU</label>
                        <input type="text" class="form-control" id="sku" name="sku" value="{{ old('sku', $products->sku) }}">
                        @error('sku')
                          <small>{{ $message }}</small>
                        @enderror
                      </div>

                    <div class="form-group">
                      <label for="nama_produk">Nama Produk</label>
                      <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ old('nama_produk', $products->nama_produk) }}">
                      @error('nama_produk')
                        <small>{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="desc_produk">Deskripsi</label>
                        <textarea name="desc_produk" id="myeditor" cols="30" rows="10" class="form-control">{{ old('desc_produk', $products->desc_produk) }}</textarea>
                        @error('desc_produk')
                          <small>{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="{{ old('harga', $products->harga) }}">
                        @error('harga')
                          <small>{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group" style="width: 40%">
                        <label for="jml_produk">Jumlah Produk</label>
                        <input type="number" class="form-control" id="jml_produk" name="jml_produk" value="{{ old('jml_produk', $products->jml_produk) }}">
                        @error('jml_produk')
                          <small>{{ $message }}</small>
                        @enderror
                    </div>
                     
                    <div class="form-group">
                      <label for="img_produk">Gambar (Max 2MB):</label>
                      <input type="file" name="img_produk" id="img_produk" class="form-control">
                      <div class="mt-1">
                        <small>Gambar Lama</small> <br>
                        <img src="{{ asset('storage/gambar/Product/'.$products->img_produk) }}" alt="" width="100px" class="img-thumbnail img-preview">
                      </div>
                      @error('img_produk')
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
  $("#img_produk").change(function(){
    previewImage(this);
  });

  function previewImage(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('.img-preview').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
@endpush
