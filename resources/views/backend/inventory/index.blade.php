@extends('layout.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Inventory</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Inventory</li>
                        </ol>
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
                        <a href="{{ route('admin.inventory.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Table Inventory</h3>
                            </div>
                            <div class="card-body table-responsive">
                                <table id="example2" class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Category</th>
                                            <th>Stok</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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


    {{-- modal begin --}}
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">View Data Inventory</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-content">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    {{-- modal end --}}
@endsection

@push('js')
    <script>
        $(function() {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": true,
                "responsive": true,
                'serverSide': true,
                'processing': true,
                "ajax": {
                    'url': '/admin/inventory',
                    'type': 'GET',
                },
                "columns": [{
                        "data": "DT_RowIndex",
                        searchable: false
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "description"
                    },
                    {
                        "data": "category"
                    },
                    {
                        "data": "stock"
                    },
                    {
                        "data": "id",
                        "render": function(data, type, row, meta) {
                            return `
                            <button type="button" class="btn btn-primary" data-toggle="modal" onclick="viewModal('${row.uuid}')" data-target="#modal-lg">
                            <i class="fas fa-eye"></i>
                            </button>
                            <a class="btn btn-warning" href="{{ url('admin/inventory/${row.uuid}/edit') }}"><i class="fas fa-edit"></i></a>
                            <button class="btn btn-danger" onclick="deleteData('${row.uuid}')"><i class="fas fa-trash"></i></button>
                            `;
                        }
                    }
                ]
            });
        });

        function viewModal(uuid) {
            $.ajax({
                url: `/admin/inventory/${uuid}`,
                type: 'GET',
                success: function(response) {
                    $("#modal-content").html(response);
                },
                error: function(error) {
                    console.log("Error:", error);
                    alert('Gagal memuat data modal.');
                }
            });
        }

        function deleteData(uuid) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/admin/inventory/${uuid}`,
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}",
                        },
                        'data': {
                            '_method': 'DELETE'
                        },
                        success: function(response) {
                            Swal.fire(
                                'Berhasil!',
                                response.message,
                                'success'
                            );
                            $('#example2').DataTable().ajax.reload();
                        },
                        error: function(xhr) {
                            Swal.fire(
                                'Gagal!',
                                'Terjadi kesalahan saat menghapus data.',
                                'error'
                            );
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
        }
    </script>
@endpush
