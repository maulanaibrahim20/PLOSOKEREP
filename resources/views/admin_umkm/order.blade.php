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
            <h1 class="m-0">Data Pesanan</h1>
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
              <div class="card">
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap" id="ordersTable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th>Pemesan</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Tanggal Pesan</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($orders as $order)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $order->product->nama_produk }}</td> 
                          <td>Rp. {{ number_format($order->product->harga, 0, ',', '.') }}</td>
                          <td>{{ $order->quantity }}</td>
                          <td>Rp. {{ number_format($order->product->harga * $order->quantity, 0, ',', '.') }}</td>
                          <td>{{ $order->customer_name }}</td>
                          <td>{{ $order->customer_address }}</td>
                          <td>{{ $order->status }}</td>
                          <td>{{ $order->created_at->format('d-m-Y') }}</td>
                        </tr>
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
            $('#ordersTable').DataTable();
        } );
    </script>
    
@endsection
