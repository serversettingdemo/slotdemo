@extends('layouts.simple')

@section('title')
    <title>{{ $title }} </title>
@endsection

@section('content')
    <div class="bg-body-extra-light py-5"
        style="background-image: url('../frontend/img/back-image.jpg');  background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
        <div class="content bg-white">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <h1 class="text-center text-dark py-3">
                        {{ $gamelist->title }} - Slot Demo Pragmatic Play
                    </h1>
                    <iframe class="py-1" src="{!! $gamelist->iframe !!}" name="btygold" width="100%" height="530px"
                        frameborder="1" marginwidth="0px" marginheight="0px" scrolling="no"
                        allowfullscreen="allowfullscreen"></iframe>
                    <div class="text-center py-3">
                        <a href="{{ $gamelist->iframe }}"><button class="btn btn-hero btn-danger">
                                <i class="fa fa-fw fa-expand opacity-50 me-1"></i> FullScreen
                            </button>
                        </a>
                    </div>
                    <div>{!! $gamelist->body !!}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
