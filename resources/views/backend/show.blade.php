@extends('layout.main')
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
            <h1 class="m-0">Detail Berita</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="mt-3">
            <div class="col-12">
                <div class="card-body table-responsive p-0 mb-2">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th width="250px">Judul</th>
                            <td>: {{ $berita->title }}</td>
                        </tr> 
                        <tr>
                            <th>Deskripsi</th>
                            <td>: {!! $berita->desc !!}</td>
                        </tr> 
                        <tr>
                            <th>Gambar</th>
                            <td>
                                <a href="{{ asset('storage/gambar/berita/'.$berita->img) }}" target="_blank" rel="noopener noreferrer">
                                    <img src="{{ asset('storage/gambar/berita/'.$berita->img) }}" alt="" width="20%">
                                </a>
                                
                            </td>
                        </tr>
                        <tr>
                            <th>Lihat</th>
                            <td>: {{ $berita->views }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            @if ($berita->status == 1)
                                <td>: <span class="badge bg-success">Published</span></td>
                            @else
                                <td>: <span class="badge bg-danger">Private</span></td>
                            @endif
                        </tr>  
                        <tr>
                            <th>Tanggal Terbit</th>
                            <td>: {{ $berita->publish_date }}</td>
                        </tr>
                    </table>

                    <div class="float-end mt-1">
                        <a href="{{ route('admin.m_berita') }}" class="btn btn-secondary">Kembali</a>
                    </div>
    
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

