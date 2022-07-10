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
      <form action="{{ route('homedesc_store') }}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="block">
            <div class="block-header block-header-default">
               <a class="btn btn-alt-secondary btn-sm" href="{{ route('homedesc') }}">
                  <i class="fa fa-arrow-left me-1"></i> Back
               </a>
            </div>
            <div class="block-content">
               <div class="row justify-content-center push">
                  <div class="col-md-10">

                     <div class="row">
                        <div class="col-md-12 mb-4">
                           <label class="form-label" for="title">Description Homepage</label>
                           <textarea id="js-ckeditor" name="title">{{ old('title') }}</textarea>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
            <div class="block-content bg-body-light">
               <div class="row justify-content-center push">
                  <div class="col-md-10">
                     <button type="submit" class="btn btn-alt-success">
                        <i class="fa fa-fw fa-check opacity-50 me-1"></i> Create HomeDesc
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
   </script>
@endsection
