@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Booking Detail</div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <td>{{$book->name}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$book->phone}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$book->email}}</td>
                        </tr>
                        <tr>
                            <th>Room</th>
                            <td>{{$book->room->name}}</td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td>{{$book->type}}</td>
                        </tr>
                        <tr>
                            <th>CheckIn</th>
                            <td>{{ Carbon\Carbon::parse($book->check_in)->toFormattedDateString()}}</td>
                        </tr>
                        <tr>
                            <th>CheckOut</th>
                            <td>{{ Carbon\Carbon::parse($book->check_out)->toFormattedDateString()}}</td>
                        </tr>
                        <tr>
                            <th>Booking Status</th>
                            <td>{{$book->status}}</td>
                        </tr>
                        <tr>
                            <th>Action</th>
                            <td>
                                <form action="{{route('booking.update',$book->id)}}" method="post">
                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                            {{method_field("PUT")}}
                                            <input type="hidden" name="status" value="success">
                                            <button type="submit" 
                                            onclick='return confirm("Are you sure want to change?")' 
                                            class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
                                        </form>
                                <form action="{{route('booking.update',$book->id)}}" method="post">
                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                            {{method_field("PUT")}}
                                            <input type="hidden" name="status" value="canceled">
                                            <button type="submit" 
                                            onclick='return confirm("Are you sure want to change?")'
                                            class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
                                        </form>
                            </td>
                        </tr>
                    </table>
                    <a href="{{route('booking.index')}}" class="btn btn-sm btn-warning">go back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
