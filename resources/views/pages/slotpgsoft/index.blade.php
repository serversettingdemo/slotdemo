@extends('layouts.backend')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5-responsive/css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5-responsive/css/responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Slot Pg Slot List</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="col-md-6 py-3">
                    <a href="javascript:void(0)" class="btn btn-primary btn-sm" id="createNewData"
                        data-bs-target="#ajaxModal">
                        <i class="fa fa-plus"></i> Add Pg Soft</a>

                    <div class="mt-3">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>

                <div class="row items-push">
                    <div class="col-md-6">
                        <!-- Add Modal -->
                        <div class="modal fade" id="ajaxModal" tabindex="-1" role="dialog"
                            aria-labelledby="modal-default-extra-large" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalHeading"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form id="add_form" name="add_form" class="js-validation"
                                        enctype="multipart/form-data">

                                        <div class="modal-body pb-1">
                                            <input type="hidden" name="id" id="id">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="title">Title <span
                                                                class="text-danger">*</span> </label>
                                                        <input type="text"
                                                            class="form-control @error('title') is-invalid @enderror"
                                                            id="title" name="title" required>
                                                        <!-- Error Not  -->
                                                        @error('title')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="image">Image <span
                                                                class="text-danger">* max 200kb</span> </label>
                                                        <input type="file"
                                                            class="form-control @error('image') is-invalid @enderror"
                                                            id="image" name="image" onchange="previewImage()"
                                                            required>
                                                        <img id="image-preview"
                                                            class="image-preview img-fluid mt-3 col-sm-3"
                                                            style="width: auto; height: 100px">
                                                        <!-- Error Not  -->
                                                        @error('image')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="body">Body <span
                                                            class="text-danger">*</span> </label>
                                                    <textarea id="js-ckeditor" name="body"></textarea>
                                                    <!-- Error Not  -->
                                                    @error('body')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="iframe">Link Game<span
                                                            class="text-danger">*</span> </label>
                                                    <input type="text"
                                                        class="form-control @error('iframe') is-invalid @enderror"
                                                        id="iframe" name="iframe" placeholder="Enter a iframe.."
                                                        required>
                                                    <!-- Error Not  -->
                                                    @error('iframe')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-alt-secondary" id="tutup"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-sm btn-primary" id="saveBtn"
                                                value="create">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END Add Modal -->
                    </div>
                </div>

                <table id="js-dataTable"
                    class="table table-bordered table-striped table-vcenter responsive js-validation font-12">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5px;">No</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>

            </div>
        </div>
        <!-- END SweetAlert2 -->
    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5-responsive/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/pages/be_form_validation.js') }}"></script>

    <script type="text/javascript">
        Dashmix.helpersOnLoad(['js-ckeditor', 'jq-validation']);

        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            isi()

            $(document).on('click', '.js-swal-confirm', function() {
                var game_id = $(this).data("id");
                Swal.fire({
                    title: 'Apakah kamu yakin?',
                    text: "Game akan terhapus permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#24287c',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('pgsoft.store') }}" + '/' + game_id,
                            type: "DELETE",

                            success: function(res, status) {
                                if (status = '200') {
                                    setTimeout(() => {
                                        Swal.fire({
                                            position: 'center',
                                            icon: 'success',
                                            title: 'Data Berhasil Dihapus',
                                            showConfirmButton: false,
                                            timer: 1500
                                        }).then((res) => {
                                            $('#js-dataTable')
                                            DataTable().ajax.reload(
                                                null, false);
                                        })
                                    });
                                }
                                $("#js-dataTable").DataTable().ajax.reload(null, false);
                            },
                            error: function(xhr) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Gagal menghapus!'
                                })
                            }
                        })

                    }
                });
            });
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imagePreview = document.querySelector('.image-preview');

            imagePreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imagePreview.src = oFREvent.target.result;
            }
        }

        function isi() {
            {{-- Ketika Klik tombol dengan id createNewData. maka --}}
            $('#createNewData').click(function() {
                $('#id').val('');
                $('#add_form').trigger("reset");
                $('#modalHeading').html("Tambah Data");
                $('#ajaxModal').modal('show');
                $('#saveBtn').html("Save");
                for (instance in CKEDITOR.instances) {
                    CKEDITOR.instances[instance].updateElement();
                }
                CKEDITOR.instances[instance].setData('');

                const image = document.querySelector('#image');
                const imagePreview = document.querySelector('.image-preview');
                imagePreview.removeAttribute("src");
            });
            {{-- MULAI DATABASE --}}
            {{-- Untuk memanggil data json dari server dan menampilkan berupa datatable --}}
            $('#js-dataTable').DataTable({
                processing: true,
                serverSide: true,
                autoWidth: false,
                pageLength: 10,
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, 'Semua']
                ],
                ajax: {
                    url: "{{ route('pgsoft.index') }}",
                    type: 'GET'
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'image',
                        name: 'image'
                    },
                    {
                        data: 'iframe',
                        name: 'iframe'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    },

                ]
            });

            $("#add_form").submit(function(e) {
                e.preventDefault();
                $("#saveBtn").html(
                    '<div class="spinner-border spinner-border-sm text-warning" role="status"><span class="visually-hidden">Loading...</span></div>'
                );
                var form = new FormData(this);
                $.ajax({
                    url: "{{ route('pgsoft.store') }}",
                    data: form,
                    type: 'POST',
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        if (data.status == 200) {
                            Swal.fire(
                                'Added!', 'Game Berhasil Dibuat!', 'success'
                            )
                        }
                        $("#add_form")[0].reset();
                        $('#ajaxModal').modal('hide');
                        const image = document.querySelector('#image');
                        const imagePreview = document.querySelector('.image-preview');
                        imagePreview.removeAttribute("src");
                        var oTable = $('#js-dataTable').dataTable();
                        oTable.fnDraw(false);

                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Gagal menambahkan!'
                        })
                    }
                });

            });
        }
    </script>
@endsection
