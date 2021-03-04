@extends('layouts.admin')

@section('content')
    <div class="card border-0 shadow my-3">
        <div class="card-body">
            <h1 class="text-theme border-bottom pb-3 mb-4">Static Page Banner</h1>

            @if(Session::has('message'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong class="error_msg">
                        {{Session::get('message')}}
                    </strong>

                </div>
            @endif

            <table class="table table-hover table-sm text-center">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($heros))
                    @foreach($heros as $hero)
                        <tr>
                            <td>{{$hero->name}}</td>
                            <td>{{$hero->hero_title}}</td>
                            <td>
                                <a href="{{route('admin.hero.edit', $hero->id)}}"
                                   class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button onclick="deleteFn({{$hero->id}})" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                                {{--                                <form class="d-inline" action="{{route('admin.hero.delete', $hero->id)}}" method="POST">--}}
                                {{--                                    @csrf--}}
                                {{--                                    @method('DELETE')--}}
                                {{--                                    <button type="submit" class="btn btn-danger btn-sm">--}}
                                {{--                                        <i class="fa fa-trash"></i>--}}
                                {{--                                    </button>--}}
                                {{--                                </form>--}}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">no data found...</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('custom-js')
    <script>
        function deleteFn(id) {
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: `{{url('/admin/hero')}}/${id}`,
                            method: 'POST',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "_method": 'DELETE',
                                "id": id
                            },
                            success: function (res) {
                                window.location.reload();
                            },
                            error: function (res) {
                                console.log(res)
                            }
                        })
                        swal("Poof! Your data has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Your data is safe!");
                    }
                });
        }
    </script>
@endpush
