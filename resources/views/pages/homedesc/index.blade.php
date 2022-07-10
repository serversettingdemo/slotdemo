@extends('layouts.backend')

@section('css_before')
    <link rel="stylesheet" href="{{ asset('js/plugins/simplemde/simplemde.min.css') }}">
@endsection
@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Homedesc</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
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

                <form action="{{ route('homedesc_update', 1) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <div class="col-lg-12 mb-4">
                            <label class="form-label" for="title">Description Homepage</label>
                            <textarea id="js-ckeditor" name="title">{{ old('title') ? old('title') : $homedesc->title }}</textarea>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <label class="form-label" for="desc_pgsoft">Description Pg Soft</label>
                            <textarea id="js-simplemde" class="js-simplemde" name="desc_pgsoft">{{ old('desc_pgsoft') ? old('desc_pgsoft') : $homedesc->desc_pgsoft }}</textarea>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-alt-success">
                                <i class="fa fa-fw fa-check opacity-50 me-1"></i> Simpan
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <!-- END SweetAlert2 -->
    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')
    <script src="{{ asset('js/plugins/simplemde/simplemde.min.js') }}"></script>
    <script src="{{ asset('js/plugins/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        Dashmix.helpersOnLoad(['js-ckeditor', 'js-simplemde']);
    </script>
@endsection
