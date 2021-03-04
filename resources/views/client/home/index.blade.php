@extends('layouts.client')

@push('custom-css')
<style>
    .banner_section{
        height: initial !important;
        padding: 3rem 0;
        box-sizing: border-box;
        overflow-y: auto;
        background: #ffffff !important;
    }
    
    .banner_section::before{
        background: transparent;
    }
    
    .banner_section h3{
        font-family: "Circular Bold";
        position: relative;
        z-index: 999;
        margin-bottom: 1.5rem;
    }
    
    .banner_section .client_item{
        width: 12.5%;
        height: 90px;
        padding: 5px;
    }
    
    .banner_section .client_item img{
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    
    @media(max-width: 767px){
        .banner_section .client_item{
            width: 15%;
            height: 60px;
            /*padding: 5px;*/
        }
    }
    
</style>
@endpush

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
                                @if($configure && $configure->contact_number)
                                    <h4>
                                        <span>Give us a call: </span>
                                        <i class="fa fa-phone"></i>
                                        <span>{{$configure->contact_number}}</span>
                                    </h4>
                                @endif
                                <h5 class="text-theme">{!! $hero->hero_desc !!}</h5>
                                <button class="btn btn-theme px-5 btn-talk">Talk to us</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    {{--Hero End--}}

    {{--Latest Post Start--}}
    @if(count($posts))
        <div class="latest_wrapper py-5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    @foreach($posts as $post)
                        {{--Single Post Start--}}
                        <div class="col-lg-4 col-md-4 col-12 mb-3">
                            <a href="{{route('loan.post.show', $post->slug)}}" style="text-decoration: none">
                                <div class="card border-0 shadow portlet">
                                    <div class="card-img-top">
                                        <img alt="Card Image"
                                             src="{{asset($post->image)}}"
                                        />
                                        @if($post->icon)
                                            <div class="service_icon shadow text-theme">
                                                {!! $post->icon !!}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card-body pt-5">
                                        <h5 class="text-theme">{{$post->title}}</h5>
                                        <p class="text-theme">{{$post->sub_title}}</p>
                                        <button class="btn btn-transparent btn-theme-text px-0">Read More</button>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{--Single Post End--}}
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    {{--Latest Post End--}}

    {{--Calculate Start--}}
    <div class="calculation_wrapper py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10 col-md-10 col-12">
                    <div class="card border-0 shadow">
                        <div class="card-body text-center py-5">
                            <h1 class="text-theme">Use our calculators to crunch the numbers</h1>

                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-3 col-md-3 col-12 mb-lg-0 mb-md-0 mb-2">
                                    <!--<a href="{{route('calculator.repayment.index')}}" class="btn btn-theme btn-block">Repayments-->
                                    <!--    calculator</a>-->
                                    <a href="#" class="btn btn-theme btn-block">Repayments calculator</a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-12 mb-lg-0 mb-md-0 mb-2">
                                    <!--<a href="{{route('calculator.savings.index')}}" class="btn btn-theme btn-block">Savings-->
                                    <!--    calculator</a>-->
                                    <a href="#" class="btn btn-theme btn-block">Savings calculator</a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-12 mb-lg-0 mb-md-0 mb-2">
                                    <!--<a href="{{route('calculator.stamp.index')}}" class="btn btn-theme btn-block">Stamp-->
                                    <!--    duty calculator</a>-->
                                    <a href="#" class="btn btn-theme btn-block">Stamp duty calculator</a>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--Calculate Start--}}

    {{-- Home Banner Start --}}
    @if(count($clients))
    <div class="banner_section">
        <div class="container">
            @if($configure->clients_title)
            <h3 class="text-center text-theme">{{$configure->clients_title}}</h3>
            @endif
            
            <!--<div class="row align-items-center justify-content-center">-->
            <!--    @foreach($clients as $client)-->
            <!--    <div class="col-md-2 col-4 client_item mb-3">-->
            <!--        <img alt="{{$client->name}}" src="{{$client->logo}}" />-->
            <!--    </div>-->
            <!--    @endforeach-->
            <!--</div>-->
            <div class="row justify-content-center">
                <div class="col-md-10 col-12">
                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                        @foreach($clients as $client)
                        <div class="client_item">
                            <img alt="{{$client->name}}" src="{{$client->logo}}" />
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    @endif
    {{-- Home Banner End --}}

    @include('partials.client.contact')

    {{--    @include('partials.client.appointment')--}}

@endsection

@push('custom-js')
    <script>
        $('.service_icon i').addClass('fa-2x');
    </script>
@endpush
