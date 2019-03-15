@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3>Message</h3>
                </div>

                <div class="panel-body">
                    @if(count($messages)<1)
                    <p>No Message Found!</p>
                    @else
                    <table class="table">
                        <tr>
                            <th>SN</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>subject</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        @foreach($messages as $k=>$message)
                        <tr>
                            <td>{{$k+1}}</td>
                            <td>{{$message->fname}}</td>
                            <td>{{$message->lname}}</td>
                            <td>{{$message->email}}</td>
                            <td>{{$message->subject}}</td>
                            <td>{{$message->message}}</td>
                            <td>
                                <form action="{{route('message.destroy',$message->id)}}" method="post">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                    {{method_field("DELETE")}}
                                    <a href="{{route('message.show',$message->id)}}" class="btn btn-sm btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{Route('message.edit',$message->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-reply" aria-hidden="true"></i></a>
                                    <button type="submit" class="btn btn-sm btn-danger"><i class='fa fa-trash-o' aria-hidden='true'></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <p class="text-center">{{ $messages->links() }}</p>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
