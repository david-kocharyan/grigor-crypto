@extends('layouts.admin')

@section('content')

    <div class="card">
        <h5 class="card-header">{{$action." ".$title}}</h5>
        <div class="card-body">
            <form method="post" action="{{$route}}@if(isset($data)){{"/".$data->id }}@endif"
                  enctype="multipart/form-data">
                @csrf
                @if(isset($data))
                    @method("PUT")
                @endif

                <div class="form-group">
                    <label for="name" class="col-form-label">Name <span class="text-danger">*</span></label>
                    @error('name')
                    <p class="text-danger" role="alert"><strong>{{ $message }}</strong></p>
                    @enderror
                    <input type="text"
                           class="form-control @error('name') is-invalid @enderror"
                           id="name"
                           placeholder="Name"
                           name="name"
                           value="{{ $data->name ?? old('name')}}">
                </div>

                <div class="form-group">
                    <label for="text" class="col-form-label">Text <span
                            class="text-danger">*</span></label>
                    @error('text')
                    <p class="text-danger" role="alert"><strong>{{ $message }}</strong></p>
                    @enderror
                    <textarea name="text" rows="5" cols="40"
                              class="form-control tinymce-editor">{{ $data->text ?? old('text')}}</textarea>
                </div>

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary" style="width: 100px;" >Save</button>
                        <button type="button" class="btn btn-danger" style="width: 100px;" onclick="window.location='{{ URL::previous() }}'">Cancel</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
