@extends('layouts.admin')

@section('content')

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header d-flex align-items-center justify-content-between">
                {{$title}}

                <a href="{{$route."/create"}}" class="btn btn-success text-right"><i class="fas fa-plus"></i>
                    Add New {{ $title }}
                </a>
            </h5>

            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Text</th>
                        <th scope="col">Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $key=>$val)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$val->name}}</td>
                            <td>{{$val->text}}</td>
                            <td>
                                <a href="{{$route."/".$val->id."/edit"}}" data-toggle="tooltip"
                                   data-placement="top" title="Edit" class="btn btn-info btn-circle tooltip-info">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form style="display: inline-block" action="{{ $route."/".$val->id }}"
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
