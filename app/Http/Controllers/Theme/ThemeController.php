<?php

namespace App\Http\Controllers\Theme;

use App\Room;
use App\Message;
use App\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThemeController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
    	return view('theme/index',compact('rooms'));
    }
    public function about()
    {
    	return view('theme/about');
    }
    public function blog()
    {
        return view('theme/blog');
    }
    public function contact()
    {
        $rooms = Room::all();
    	return view('theme/contact',compact('rooms'));
    }
    public function rooms()
    {
        $rooms = Room::all();
    	return view('theme/rooms',compact('rooms'));
    }
    public function amnities()
    {
    	return view('theme/amnities');
    }
    public function message(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required|max:500',
        ]);
        $message = new Message;
        $message->fname = $request->fname;
        $message->lname = $request->lname;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();
        notify()->flash('Thank yo for yor message, we soon reply!', 'success');
        return redirect()->route('contact')->with('success','message send successfully');
    }
    public function book(Request $request)
    {
        $this->validate($request, [
            'check_in' => 'required',
            'check_out' => 'required',
            'room_id' => 'required',
            'type' => 'required',
            'email' => 'required',
            'name' => 'required',
            'phone' => 'required',
        ]);
        $booking = new Booking;
        $check_in = Carbon::parse($request->check_in)->format('Y-m-d');
        $check_out = Carbon::parse($request->check_out)->format('Y-m-d');
        $booking->check_in = $check_in;
        $booking->check_out = $check_out;
        $booking->room_id = $request->room_id;
        $booking->type = $request->type;
        $booking->email = $request->email;
        $booking->name = $request->name;
        $booking->phone = $request->phone;
        $booking->status = 'pending';
        $booking->save();
        notify()->flash('we recieved you booking, soon we wil notify you. Thank you!', 'success');
        return redirect()->back()->with('success','booking send successfully');
    }
    public function ajaxRequest(Request $request)
    {
        // $this->validate($request, [
        //     'check_in' => 'required',
        //     'check_out' => 'required',
        //     'room_id' => 'required',
        //     'type' => 'required',
        //     'email' => 'required',
        //     'name' => 'required',
        //     'phone' => 'required',
        // ]);

        // $booking = new Booking;
        // $check_in = Carbon::parse($request->check_in)->format('Y-m-d');
        // $check_out = Carbon::parse($request->check_out)->format('Y-m-d');
        // $booking->check_in = $check_in;
        // $booking->check_out = $check_out;
        // $booking->room_id = $request->room_id;
        // $booking->type = $request->type;
        // $booking->email = $request->email;
        // $booking->name = $request->name;
        // $booking->phone = $request->phone;
        // $booking->status = 'pending';
        // $booking->save();
        // console.log($booking->id);
        // return response()->json(['success'=>'Got Simple Ajax Request.']);

        if (Request::ajax()) {
        $booking = new Booking;

        $check_in = Carbon::parse($post['check_in'])->format('Y-m-d');
        $check_out = Carbon::parse($post['check_out'])->format('Y-m-d');
        $booking->check_in = $check_in;
        $booking->check_out = $check_out;
        $booking->room_id = $post['room_id'];
        $booking->type = $post['type'];
        $booking->email = $post['email'];
        $booking->name = $post['name'];
        $booking->phone = $post['phone'];
        $booking->status = 'pending';
        $booking->save();

        $response = array(
        'status' => 'success',
        'msg' => 'Option created successfully',
        );

        return Response::json( $response );
    }
        
    }
}
