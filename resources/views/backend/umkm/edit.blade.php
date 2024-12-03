@extends('layout.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Data UMKM</h1>
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
                                <h3 class="card-title">Edit UMKM</h3>
                            </div>
                            <form id="umkmEditForm" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputNama">Nama UMKM</label>
                                        <input type="text" class="form-control" id="inputNama" name="name"
                                            placeholder="Nama UMKM" value="{{ $umkm->name }}">
                                        <small id="nameError" class="text-danger"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPemilik">Nama Pemilik UMKM</label>
                                        <input type="text" class="form-control" id="inputPemilik" name="owner_name"
                                            placeholder="Nama Pemilik" value="{{ $umkm->owner_name }}">
                                        <small id="ownerNameError" class="text-danger"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputKategori">Kategori</label>
                                        <input type="text" class="form-control" id="inputKategori" name="category"
                                            placeholder="Kategori" value="{{ $umkm->category }}">
                                        <small id="categoryError" class="text-danger"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAlamat">Alamat</label>
                                        <input type="text" class="form-control" id="inputAlamat" name="address"
                                            placeholder="Alamat" value="{{ $umkm->address }}">
                                        <small id="addressError" class="text-danger"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDeskripsi">Deskripsi</label>
                                        <textarea class="form-control" id="inputDeskripsi" name="description" placeholder="Deskripsi">{!! $umkm->description !!}</textarea>
                                        <small id="descriptionError" class="text-danger"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputKontak">Kontak</label>
                                        <input type="tel" class="form-control" id="inputKontak" name="contact"
                                            placeholder="Kontak" value="{{ $umkm->contact }}">
                                        <small id="contactError" class="text-danger"></small>
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
            $('#umkmEditForm').submit(function(e) {
                e.preventDefault();

                let formData = new FormData(this);

                $.ajax({
                    url: '{{ route('admin.umkm.update', $umkm->uuid) }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'UMKM Updated Successfully',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location.href =
                                    '{{ route('admin.umkm.index') }}';
                            });
                        }
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON.errors;

                        $('#nameError').text(errors?.name?.[0] || '');
                        $('#ownerNameError').text(errors?.owner_name?.[0] || '');
                        $('#categoryError').text(errors?.category?.[0] || '');
                        $('#addressError').text(errors?.address?.[0] || '');
                        $('#descriptionError').text(errors?.description?.[0] || '');
                        $('#contactError').text(errors?.contact?.[0] || '');
                    }
                });
            });
        });
    </script>
@endpush
