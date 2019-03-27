@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Booking</div>

                <div class="panel-body">
                    @if(count($bookings)<1)
                    <p class="text-center">No Bookings!</p>
                    @else
                    <table class="table">
                        <tr>
                            <th>SN</th>
                            <th>Room</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Booking Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach($bookings as $k=>$book)
                        <tr>
                            <td>{{$k+1}}</td>
                            <td>{{$book->room->name}}</td>
                            <td>{{$book->name}}</td>
                            <td>{{$book->type}}</td>
                            <td>
                                {{ Carbon\Carbon::parse($book->check_in)->toFormattedDateString()}}
                            </td>
                            <td>
                                {{ Carbon\Carbon::parse($book->check_out)->toFormattedDateString()}}
                            </td>
                            <td>{{$book->status}}</td>

                            <td>
                                <div class="row">
                                    
                                    <div class="col-md-4">
                                        <form action="{{route('booking.update',$book->id)}}" method="post">
                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                            {{method_field("PUT")}}
                                            <input type="hidden" name="status" value="success">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <form action="{{route('booking.update',$book->id)}}" method="post">
                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                            {{method_field("PUT")}}
                                            <input type="hidden" name="status" value="canceled">
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
