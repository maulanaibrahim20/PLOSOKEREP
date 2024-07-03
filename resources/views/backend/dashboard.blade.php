@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
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
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$total_pengaduan}}</sup></h3>
                <p>Pengaduan Masyarakat</p>
              </div>
              <div class="icon">
                <i class="ion ion-chatbubbles"></i>
              </div>
              <a href="{{ route('admin.m_berita') }}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>
                <p>Profil Desa</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>65</h3>
                <p>Data Penduduk</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{$total_surat}}</h3>
                <p>Surat Masuk</p>
              </div>
              <div class="icon">
                <i class="ion ion-email"></i>
              </div>
              <a href={{route('admin.manajemen_pengajuan_surat')}} class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$total_berita}}</h3>
                <p>Berita Desa</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-newspaper"></i>
              </div>
              <a href="{{ route('admin.m_berita') }}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{$total_user}}</h3>
                <p>Data User</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-user"></i>
              </div>
              <a href="{{ route('admin.user') }}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$total_aparatur}}</h3>
                <p>Aparatur Desa</p>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
              <a href="{{ route('admin.aparatur') }}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          
        </div>
        <div class="row">
          <div class="col-6">
            <h3>Berita Terbaru</h3>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Tanggal Buat</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($latest_berita as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->title }}</td>
                      <td>{{ $item->created_at }}</td>
                      <td> <a href="{{ route('admin.berita.show', ['id' => $item->id]) }}" class="btn btn-secondary">Detail</a></td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <div class="col-6">
            <h3>Berita Terpopuler</h3>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>dilihat</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($popular_berita as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->title }}</td>
                      <td>{{ $item->views }}</td>
                      <td> <a href="{{ route('admin.berita.show', ['id' => $item->id]) }}" class="btn btn-secondary">Detail</a></td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
       
      </div>
    </section>
    
    <!-- /.content -->
  </div>
    
@endsection