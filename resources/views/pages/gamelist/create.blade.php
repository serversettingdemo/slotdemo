@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content content-full content-boxed">
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
        <!-- New Post -->
        <form action="{{ route('gamelist.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="block">
                <div class="block-header block-header-default">
                    <a class="btn btn-alt-secondary btn-sm" href="{{ route('gamelist.index') }}">
                        <i class="fa fa-arrow-left me-1"></i> Back
                    </a>
                </div>
                <div class="block-content">
                    <div class="row justify-content-center push">
                        <div class="col-md-10">

                            <div class="row">

                                <div class="col-md-6 mb-4">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                        name="title" value="{{ old('title') }}" placeholder="Enter a title.." required>
                                    <!-- Error Not Required -->
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <label class="form-label" for="body">Body</label>
                                    <textarea id="js-ckeditor" name="body">{{ old('body') }}</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="image">Select image Max 500kb <span
                                                class="text-danger">*</span> </label>

                                        <input class="form-control @error('image') is-invalid @enderror" type="file"
                                            id="image" name="image" onchange="previewImage()">
                                        <img class="image-preview img-fluid mt-3 col-sm-3"
                                            style="width: auto; height: 100px">
                                    </div>
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="iframe">Link Game</label>
                                    <input type="text" class="form-control @error('iframe') is-invalid @enderror"
                                        id="iframe" name="iframe" value="{{ old('iframe') }}"
                                        placeholder="Enter a iframe.." required>
                                    <!-- Error Not Required -->
                                    @error('iframe')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="block-content bg-body-light">
                    <div class="row justify-content-center push">
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-alt-success">
                                <i class="fa fa-fw fa-check opacity-50 me-1"></i> Create Gamelist
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- END New Post -->
    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')
    <script src="{{ asset('js/plugins/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        Dashmix.helpersOnLoad(['js-ckeditor']);

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
    </script>
@endsection
