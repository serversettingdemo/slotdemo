@extends('layouts.simple')

@section('title')
    <title>{{ $title }} </title>
@endsection

@section('content')
    <!-- Hero -->
    <div class="bg-body-extra-light py-5"
        style="background-image: url('frontend/img/back-image.jpg');  background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
        <div class="content bg-white-100 mt-2">
            <div class="row justify-content-center">
                <div class="col-lg-12 py-5">
                    <img src="{{ asset('frontend/img/banner-depan.png') }}" class="img-fluid" width="1100px" height="auto"
                        alt="Slot Demo">
                    <img src="{{ asset('frontend/img/banner-bonus-CASHBACK.gif') }}" class="img-fluid mt-2" width="1100px"
                        height="auto" alt="Slot Demo">
                </div>
            </div>

            <div class="row justify-content-center">
                @foreach ($pgsoft as $item)
                    <div class="col-md-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="{{ route('pgsoftshow', $item->slug) }}"
                            data-toggle="appear" data-class="animated fadeIn">

                            <div class="block-content pb-8 bg-image"
                                style="background-image: url('{{ asset('storage/' . $item->image) }}')">
                            </div>
                            <div class="block-content text-center">
                                <p class="fw-semibold text-dark mb-1">{{ $item->title }}</p>
                            </div>
                            <div class="py-2 block-rounded-bottom block-content-full bg-body-light">
                                <div class="row g-0 justify-content-center fs-sm text-center">
                                    <div class="col-4">
                                        <span class="text-muted fw-semibold">
                                            <i class="fa fa-fw fa-eye opacity-50 me-1"></i> {{ views($item)->count() }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div>
                        @if ($homedesc !== 0)
                            {!! $homedesc->desc_pgsoft !!}
                        @else
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
