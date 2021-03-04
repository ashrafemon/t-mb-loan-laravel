@extends('layouts.client')

@section('content')
    {{--Post Wrapper Start--}}
    <div class="post_wrapper py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10 col-12">
                    <div class="text-center">
                        <h2 class="text-theme">{{$post->title}}</h2>
                        <h5 class="text-theme mb-5">{{$post->sub_title}}</h5>

                        <div class="post_image mb-5">
                            <img src="{{asset($post->image)}}" class="img-fluid" alt="{{$post->title}}">
                        </div>
                    </div>

                    <div class="post_content">
                        {!! $post->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--Post Wrapper End--}}

    {{--Book Appointment Start--}}
    <div class="appointment_wrapper py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 col-md-9 col-12">
                    <div class="card border-0 shadow hero_card">
                        <div class="card-body text-center py-5">
                            <h2 class="text-theme mb-4">Talk to Aussie about your
                                pre-approved {{strtolower($post->loan->name)}}</h2>
                            <button class="btn btn-theme px-5 btn-talk">Book an appointment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--Book Appointment End--}}

    {{--    @include('partials.client.appointment')--}}
@endsection

@push('custom-js')
    <script>
        $('.post_content h1').removeAttr('style')
        $('.post_content h2').removeAttr('style')
        $('.post_content h3').removeAttr('style')
        $('.post_content h4').removeAttr('style')
        $('.post_content h5').removeAttr('style')
        $('.post_content h6').removeAttr('style')
        $('.post_content p').removeAttr('style')

        $('.post_content p').each(function () {
            if ($(this).is(':empty')) {
                $(this).remove()
            }
        })
    </script>
@endpush
