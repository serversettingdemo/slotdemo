@extends('layouts.simple')

@section('content')
    <div class="bg-body-extra-light py-5"
        style="background-image: url('../frontend/img/back-image.jpg');  background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
        <div class="content bg-white">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <h4 class="text-center py-3">
                        <a class="text-dark" href="#">{{ $slotpgsoft->title }}</a>
                    </h4>
                    <iframe class="py-1" src="{!! $slotpgsoft->iframe !!}" name="btygold" width="100%" height="530px"
                        frameborder="1" marginwidth="0px" marginheight="0px" scrolling="no"
                        allowfullscreen="allowfullscreen"></iframe>
                    <div class="text-center py-3">
                        <a href="{{ $slotpgsoft->iframe }}"><button class="btn btn-hero btn-danger">
                                <i class="fa fa-fw fa-expand opacity-50 me-1"></i> FullScreen
                            </button>
                        </a>
                    </div>
                    <div>{!! $slotpgsoft->body !!}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
