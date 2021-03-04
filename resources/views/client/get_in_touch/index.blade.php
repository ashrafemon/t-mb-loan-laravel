@extends('layouts.client')

@section('content')
    {{--Hero Start--}}
    <div class="hero_wrapper d-flex flex-column justify-content-end align-items-center pb-lg-3 pb-md-3"
         style="background-image: url('{{asset($hero ? $hero->hero_image : 'none')}}')"
    >
        <div class="container-fluid">
            @if($hero)
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-7 col-md-7 col-12">
                        <div class="card border-0 shadow hero_card">
                            <div class="card-body text-center py-5">
                                <h2 class="text-theme">{{$hero->hero_title}}</h2>
                                <h5 class="text-theme">{!! $hero->hero_desc !!}</h5>
                                @if($hero->hero_btn)
                                    <button class="btn btn-theme px-5 btn-talk">{{$hero->hero_btn_text}}</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    {{--Hero End--}}

    {{--Finder Start--}}
    {{--    <div class="calculation_wrapper py-5">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row justify-content-center align-items-center">--}}
    {{--                <div class="col-lg-10 col-md-10 col-12">--}}
    {{--                    <div class="card border-0 shadow">--}}
    {{--                        <div class="card-body text-center py-5">--}}
    {{--                            <h1 class="text-theme">Find a store or broker</h1>--}}

    {{--                            <div class="row justify-content-center align-items-center">--}}
    {{--                                <div class="col-lg-3 col-md-3 col-12 mb-lg-0 mb-md-0 mb-2">--}}
    {{--                                    <button class="btn btn-theme btn-block">Find a store</button>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-lg-3 col-md-3 col-12 mb-lg-0 mb-md-0 mb-2">--}}
    {{--                                    <button class="btn btn-theme btn-block">Find a broker</button>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--Finder End--}}

    {{--Complains Start--}}
    @if($configure && $configure->complain)
        <div class="complain_wrapper py-5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9 col-md-9 col-12">
                        <div class="card border-0 shadow hero_card">
                            <div class="card-body text-center py-5">
                                <h2 class="text-theme">Complaints</h2>
                                <h5 class="text-theme">If you have a complaint, it’s important you let us know how we
                                    can
                                    improve our services and provide a better experience for you in a friendly and fair
                                    way.
                                    To
                                    resolve your complaint, please complete the form so our team can follow it up.</h5>
                                <button class="btn btn-theme px-5 btn-talk">Complaints form</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{--Complains End--}}

    {{-- Office Address Start --}}
    @if(count($offices))
        <div class="touch_wrapper py-5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-10 col-md-10 col-12">
                        <div class="portion">
                            <div class="portion_title text-theme">
                                <h2>Corporate offices</h2>
                            </div>
                            <div class="portion_desc">
                                @foreach($offices as $office)
                                    <div class="portion_item">
                                        <h5>{{$office->name}}</h5>
                                        <ul class="default-nav">
                                            <li>
                                                <div>{{$office->address}}</div>
                                                <div>Telephone: {{$office->number}}</div>
                                            </li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{-- Office Address End --}}

@endsection
