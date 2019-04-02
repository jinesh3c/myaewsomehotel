<?php

namespace App\Http\Controllers\Admin;

use App\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::orderBy('created_at','DESC')->paginate(10);
        return view('admin/room/index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/room/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'image' => 'mimes:jpeg,jpg,png,gif|max:4096',
            'facility' => 'required|max:500',
            'price' => 'required'
        ]);
        $data = new Room;
        $data->name = $request->name;
        $data->facility = $request->facility;
        $data->price = $request->price;
        if($request->hasFile('image'))
        {
          $filename=date('ymdhis');
          $extname=$request->file('image')->getClientOriginalExtension();
          $filenametostore=$filename.'.'.$extname;
          $path=$request->file('image')->move(public_path('/uploads/room'),$filenametostore);
          $path_name = 'public/uploads/room/'.$filenametostore;
          $data->image_path = $path_name;
        }
        $data->save();
        notify()->flash('Room added successfully!', 'success');
        return redirect()->route('room.index')->with('success','Room added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::find($id);
        return view('admin.room.edit',compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'image' => 'mimes:jpeg,jpg,png,gif|max:4096',
            'facility' => 'required|max:500',
            'price' => 'required'
        ]);
        $data = Room::find($id);
        $data->name = $request->name;
        $data->facility = $request->facility;
        $data->price = $request->price;
        if($request->hasFile('image'))
        {
          $filename=date('ymdhis');
          $extname=$request->file('image')->getClientOriginalExtension();
          $filenametostore=$filename.'.'.$extname;
          $path=$request->file('image')->move(public_path('/uploads/room'),$filenametostore);
          $path_name = 'public/uploads/room/'.$filenametostore;
          $data->image_path = $path_name;
        }
        $data->save();
        notify()->flash('Room updated successfully', 'success');
        return redirect()->route('room.index')->with('success','Room updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Room::find($id)->delete();
        notify()->flash('Room deleted successfully', 'success');
        return redirect()->route('room.index')->with('success','Room deleted successfully');
    }
}
