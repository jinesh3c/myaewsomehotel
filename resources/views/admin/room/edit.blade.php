@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3>Room</h3>
                <a href="{{route('room.index')}}" class="btn btn-sm btn-warning">Go Back</a>
                </div>

                <div class="panel-body">
                    <form role="form" action="{{ route('room.update',$room->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{method_field("PUT")}}
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="box-body">
                                <div class="col-lg-offset-2 col-lg-8">
                                    <div class="form-group">
                                        <label for="full-name" class="col-sm-4 control-label">name</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" placeholder="Room name" value="{{$room->name}}" required>
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="image" class="col-sm-4 control-label">Image</label>
                                        <div class="col-md-6">
                                            <input id="file" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" placeholder="room image">
                                            <img src="{{url($room->image_path)}}" width="200px">
                                            @if ($errors->has('image'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('image') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="facility" class="col-sm-4 control-label">Facility</label>
                                        <div class="col-md-6">
                                            <textarea id="ckeditor" name="facility" class="form-control">{{$room->facility}}</textarea>
                                            @if ($errors->has('facility'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('facility') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="price" class="col-sm-4 control-label">Price</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="price" name="price" placeholder="Room price" value="{{$room->price}}" required>
                                            @if ($errors->has('price'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('price') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="slug" class="col-sm-4 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>                              
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace( 'ckeditor' );
  </script>
@endsection
