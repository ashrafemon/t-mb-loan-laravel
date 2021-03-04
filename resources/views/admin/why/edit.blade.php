@extends('layouts.admin')

@section('content')
    <div class="my-3">
        <div class="card border-0 shadow">
            <div class="card-body">
                <h1 class="text-theme border-bottom pb-3 mb-3">Why Page Content</h1>

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

                        <form action="{{route('admin.why.update', $configure->id)}}" method="POST">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="why_page_content">Why Page Content</label>
                                <textarea name="why_page_content" id="description"
                                          class="form-control">{{$configure->why_page_content ?? old('why_page_content')}}</textarea>

                                @error('why_page_content')
                                <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">Set Why Page Content</button>
                            </div>
                        </form>
                    </div>
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
