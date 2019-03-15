@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3>Room</h3>
                <a href="{{route('room.create')}}" class="btn btn-sm btn-primary">Add Room</a>
                </div>

                <div class="panel-body">
                    @if(count($rooms)<1)
                    <p>No Rooms Found!</p>
                    @else
                    <table class="table">
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        @foreach($rooms as $k=>$room)
                        <tr>
                            <td>{{$k+1}}</td>
                            <td>{{$room->name}}</td>
                            <td><img src="{{url($room->image_path)}}" width="100px"></td>
                            <td>{!!$room->facility!!}</td>
                            <td>{{$room->price}}</td>
                            <td>
                                <form action="{{route('room.destroy',$room->id)}}" method="post">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                    {{method_field("DELETE")}}
                                    {{-- <a href="{{route('room.show',$room->id)}}" class="btn btn-sm btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a> --}}
                                    <a href="{{Route('room.edit',$room->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                    <button type="submit" class="btn btn-sm btn-danger"><i class='fa fa-trash-o' aria-hidden='true'></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <p class="text-center">{{ $rooms->links() }}</p>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
