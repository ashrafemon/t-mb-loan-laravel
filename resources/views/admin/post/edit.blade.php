@extends('layouts.admin')

@section('content')
    <div class="card border-0 shadow my-3">
        <div class="card-body">
            <h1 class="text-theme border-bottom pb-3 mb-3">Post</h1>

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

                    <form action="{{route('admin.post.update', $post->id)}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="loan_id">Loan</label>
                            <select name="loan_id" id="loan_id" class="form-control">
                                <option disabled>Select Loan Type</option>
                                @foreach($loans as $loan)
                                    <option
                                        {{$post->loan_id == $loan->id ? 'selected' : '' }} value="{{$loan->id}}">{{$loan->name}}</option>
                                @endforeach
                            </select>

                            @error('loan_id')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Post Title"
                                   value="{{$post->title ?? old('title')}}"/>

                            @error('title')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="sub_title">Sub Title</label>
                            <input type="text" name="sub_title" id="sub_title" class="form-control"
                                   placeholder="Post Title" value="{{$post->sub_title ?? old('sub_title')}}">

                            @error('sub_title')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <input type="text" name="icon" id="icon" class="form-control"
                                   placeholder='<i class="fab fa-affiliatetheme"></i>'
                                   value="{{$post->icon ?? old('icon')}}"/>
                            <div class="small text-info text-right">use fontawesome icon</div>

                            @error('icon')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description"
                                      class="form-control">{{$post->description ?? old('description')}}</textarea>

                            @error('description')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <div class="mb-3" style="width: 200px">
                                <img src="{{asset($post->image)}}" class="img-fluid" alt="{{$post->title}}"/>
                            </div>
                            <input type="file" class="form-control-file" name="image" id="image"/>

                            @error('image')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status" class="d-block">Post Status</label>
                            <select name="status" id="status" class="form-control">
                                <option disabled>Select Post Status</option>
                                <option {{$post->status == 1 ? 'selected' : ''}} value="1">Active</option>
                                <option {{$post->status == 0 ? 'selected' : ''}} value="0">In-Active</option>
                            </select>

                            @error('isDisplay')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="isDisplay" class="d-block">Display on Home Page</label>
                            <select name="isDisplay" id="isDisplay" class="form-control">
                                <option disabled>Select Display State</option>
                                <option {{$post->isDisplay == 1 ? 'selected' : ''}} value="1">Yes</option>
                                <option {{$post->isDisplay == 0 ? 'selected' : ''}} value="0">No</option>
                            </select>

                            @error('isDisplay')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Update Post</button>
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
