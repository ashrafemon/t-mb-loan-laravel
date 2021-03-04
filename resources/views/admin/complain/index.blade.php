@extends('layouts.admin')

@section('content')
    <div class="my-3">
        <div class="card border-0 shadow">
            <div class="card-body">
                <h1 class="text-theme border-bottom pb-3 mb-4">Complain</h1>

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
                        <th width="25%">Name</th>
                        <th width="25%">Email</th>
                        <th width="25%">message</th>
                        <th width="25%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($complains))
                        @foreach($complains as $complain)
                            <tr>
                                <td>{{$complain->first_name}}</td>
                                <td>{{$complain->email}}</td>
                                <td>{{$complain->message}}</td>
                                <td>
                                    <a class="btn btn-info btn-sm"
                                       href="{{route('admin.complain.show', $complain->id)}}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <button onclick="deleteFn({{$complain->id}})" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    {{--                                    <form class="d-inline" action="{{route('admin.complain.delete', $complain->id)}}"--}}
                                    {{--                                          method="POST">--}}
                                    {{--                                        @csrf--}}
                                    {{--                                        @method('DELETE')--}}
                                    {{--                                        <button type="submit" class="btn btn-danger btn-sm">--}}
                                    {{--                                            <i class="fa fa-trash"></i>--}}
                                    {{--                                        </button>--}}
                                    {{--                                    </form>--}}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">no data found...</td>
                        </tr>
                    @endif
                    </tbody>
                </table>

                <div class="text-center">
                    {{$complains->links()}}
                </div>
            </div>
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
                            url: `{{url('/admin/complain')}}/${id}`,
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
