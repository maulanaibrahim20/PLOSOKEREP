@extends('layout.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Data Inventory</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create Inventory</h3>
                            </div>
                            <form id="inventoryForm" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputNama">Nama barang</label>
                                        <input type="text" class="form-control" id="inputnama" name="name"
                                            placeholder="Nama Barang">
                                        <small id="nameError"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputJabatan">Deskripsi</label>
                                        <input type="text" class="form-control" id="inputJabatan" name="description"
                                            placeholder="Deskripsi (optional)">
                                        <small id="descriptionError"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputJabatan">Category</label>
                                        <input type="text" class="form-control" id="inputJabatan" name="category"
                                            placeholder="Category">
                                        <small id="categoryError"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputJabatan">Stok</label>
                                        <input type="number" class="form-control" id="inputJabatan" name="stock"
                                            placeholder="Stok">
                                        <small id="stockError"></small>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#inventoryForm').submit(function(e) {
                e.preventDefault();

                let formData = new FormData(this);

                $.ajax({
                    url: '{{ route('admin.inventory.store') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.status == 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Inventory Added Successfully',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location.href =
                                    '{{ route('admin.inventory.index') }}';
                            });
                        }
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON.errors;
                        if (errors.name) {
                            $('#nameError').text(errors.name[0]).css('color', 'red');
                        } else {
                            $('#nameError').text('');
                        }
                        if (errors.description) {
                            $('#descriptionError').text(errors.description[0]).css('color',
                                'red');
                        } else {
                            $('#descriptionError').text('');
                        }
                        if (errors.category) {
                            $('#categoryError').text(errors.category[0]).css('color', 'red');
                        } else {
                            $('#categoryError').text('');
                        }
                        if (errors.stock) {
                            $('#stockError').text(errors.stock[0]).css('color', 'red');
                        } else {
                            $('#stockError').text('');
                        }
                    }
                });
            });
        });
    </script>
@endpush
