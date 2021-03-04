@extends('layouts.client')

@section('content')
    {{--Hero Start--}}
    <div class="hero_wrapper d-flex flex-column justify-content-end align-items-center pb-lg-3 pb-md-3"
         style="background-image: url('{{asset($loan->hero_image)}}')">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7 col-md-7 col-12">
                    @if($loan->hero_title || $loan->hero_desc)
                        <div class="card border-0 shadow hero_card">
                            <div class="card-body text-center py-5">
                                <h2 class="text-theme">{{$loan->hero_title}}</h2>
                                <h5 class="text-theme">{!! $loan->hero_desc !!}</h5>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    {{--Hero End--}}

    {{--Loan Information Start--}}
    @if($loan->title || $loan->description)
        <div class="business_slogan py-5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-10 col-md-10 col-12">
                        <div class="portion">
                            <div class="portion_title text-theme">
                                <h2>{{$loan->title}}</h2>
                            </div>
                            <div class="portion_desc">
                                {!! $loan->description !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endif
    {{--Loan Information End--}}

    {{--Latest Post Start--}}
    @if(count($posts))
        <div class="latest_wrapper py-5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    @foreach($posts as $post)
                        {{--Single Post Start--}}
                        <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
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

                <div class="text-center">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    @endif
    {{--Latest Post End--}}

    @include('partials.client.contact')

@endsection

@push('custom-js')
    <script>
        $('.portion_desc h2').removeAttr('style')
        $('.portion_desc p').removeAttr('style')
        $('.portion_desc ul').removeAttr('style')

        $('.portion_desc p').each(function () {
            if ($(this).is(':empty')) {
                $(this).remove()
            }
        })

        $('.service_icon i').addClass('fa-2x');
    </script>
@endpush
