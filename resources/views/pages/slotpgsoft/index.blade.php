@extends('layouts.backend')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5-responsive/css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5-responsive/css/responsive.bootstrap5.min.css') }}">
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
                    <a href="{{ route('pgsoft.create') }}"><button type="button" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> Add Pg Soft</button>
                    </a>

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

                <table class="table table-bordered table-striped table-vcenter responsive js-dataTable-buttons font-12">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Body</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($games as $item)
                            <tr>
                                <td class="text-center" style="width: 5px;">{{ $loop->iteration }}</td>
                                <td class="font-w600"> {{ $item->title }} </td>

                                <td> <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid"
                                        width="150px" height="auto" alt=""> </td>
                                <td class="font-w600"> {{ Str::limit($item->body, 30) }} </td>
                                <td class="font-w600"> {{ Str::limit($item->iframe, 30) }} </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('pgsoft.edit', $item->id) }}"
                                            class="btn btn-sm btn-alt-success" data-bs-toggle="tooltip" title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form id="data-{{ $item->id }}"
                                            action="{{ route('pgsoft.destroy', $item->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="js-swal-confirm btn btn-sm btn-alt-danger"
                                                data-bs-toggle="tooltip" data-original-title="Delete" title="Delete">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        <!-- END SweetAlert2 -->
    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')
    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>

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

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
@endsection
