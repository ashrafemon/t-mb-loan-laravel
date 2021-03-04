@extends('layouts.admin')

@section('content')
    <div class="card border-0 shadow my-3">
        <div class="card-body">
            <h1 class="text-theme border-bottom pb-3 mb-3">Loan</h1>

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-7 col-12">
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong class="error_msg">
                                {{Session::get('message')}}
                            </strong>

                        </div>
                    @endif

                    <form action="{{route('admin.loan.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Loan Name"
                                   value="{{old('name')}}"/>

                            @error('name')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="hero_title">Header Title</label>
                            <input type="text" name="hero_title" id="hero_title" class="form-control"
                                   placeholder="Header Title" value="{{old('hero_title')}}"/>

                            @error('hero_title')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="hero_desc">Header Description</label>
                            <input type="text" name="hero_desc" id="hero_desc" class="form-control"
                                   placeholder="Header Description" value="{{old('hero_desc')}}"/>

                            @error('hero_desc')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="hero_image">Header Image</label>
                            <input type="file" class="form-control-file" name="hero_image" id="hero_image"/>

                            @error('hero_image')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="title">Body Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Body Title"
                                   value="{{old('title')}}"/>

                            @error('title')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description"
                                      class="form-control">{{old('description')}}</textarea>

                            @error('description')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Add Loan</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('custom-js')
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.21.0/trumbowyg.min.js"-->
    <!--        integrity="sha512-l6MMck8/SpFCgbJnIEfVsWQ8MaNK/n2ppTiELW3I2BFY5pAm/WjkNHSt+2OD7+CZtygs+jr+dAgzNdjNuCU7kw=="-->
    <!--        crossorigin="anonymous"></script>-->

    <script>
        // $('#description').trumbowyg();
        tinymce.init({
            selector: '#description',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
            menubar: false
        });
    </script>
@endpush
