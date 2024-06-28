@extends('layout.umkm_main')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Produk</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
              <a href="{{ route('umkm.create_produk') }}" class="btn btn-primary mb-3">Tambah Produk</a>
              <div class="card">
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap" id="aparatur" style="max-width: 100px">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>SKU</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Gambar</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($products as $d)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $d->sku }}</td> 
                          <td>{{ $d->nama_produk }}</td> 
                          <td>{!! $d->desc_produk !!}</td>
                          <td>{{ $d->harga }}</td>
                          <td>{{ $d->jml_produk }}</td>
                          <td><img src="{{ asset('storage/gambar/Product/'.$d->img_produk) }}" alt="" width="100"></td>
                          <td>
                            <a href="{{ route('umkm.produk.edit', ['id' => $d->id]) }}" class="btn btn-primary">
                                <i class="fas fa-pen"></i> Edit
                            </a>
                            <a data-toggle="modal" data-target="#modal-hapus{{ $d->id }}" class="btn btn-danger">
                              <i class="fas fa-trash-alt"></i> Hapus
                            </a>
                          </td>
                        </tr>
                        <div class="modal fade" id="modal-hapus{{ $d->id }}">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                                <button type= "button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>Apakah kamu yakin ingin menghapus Produk <b>{{ $d->nama_produk }}</b></p>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <form action="{{ route('umkm.produk.delete',['id' => $d->id]) }}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                  <button type="submit" class="btn btn-primary">Ya, Hapus</button>
                                </form>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      @endforeach
                    </tbody>
                    
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>

    <script>
        $(document).ready( function () {
            $('#aparatur').DataTable();
        } );
    </script>
    
@endsection