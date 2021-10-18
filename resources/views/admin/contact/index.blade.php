@extends('layouts.admin')

@section('content')

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header d-flex align-items-center justify-content-between">
                {{$title}}
            </h5>

            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                        <th scope="col">Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $key=>$val)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$val->name}}</td>
                            <td>{{$val->email}}</td>
                            <td>{{$val->subject}}</td>
                            <td>{{$val->message}}</td>
                            <td>
                                <form style="display: inline-block" action="{{ $route."/".$val->id."/delete"}}"
                                      method="post" id="work-for-form">
                                    @csrf
                                    @method("DELETE")
                                    <button data-toggle="tooltip"
                                            data-placement="top" title="Remove"
                                            class="btn btn-danger btn-circle tooltip-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$data->links('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>
@endsection
