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

    {{--Why Slogan Start--}}
    @if($configure)
    <div class="business_slogan py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10 col-md-10 col-12">
                    <div class="portion">
                        {!! $configure->why_page_content !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endif
    {{--Why Slogan End--}}

    @include('partials.client.contact')

    {{--    @include('partials.client.appointment')--}}
@endsection

@push('custom-js')
    <script>
        $('.portion h1').removeAttr('style')
        $('.portion h2').removeAttr('style')
        $('.portion h3').removeAttr('style')
        $('.portion h4').removeAttr('style')
        $('.portion h5').removeAttr('style')
        $('.portion h6').removeAttr('style')
        $('.portion p').removeAttr('style')

        $('.portion p').each(function () {
            if ($(this).is(':empty')) {
                $(this).remove()
            }
        })
    </script>
@endpush
