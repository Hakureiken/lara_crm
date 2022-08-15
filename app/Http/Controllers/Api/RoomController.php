<?php

namespace App\Http\Controllers\Api;

use App\Models\Rooms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $rooms = Rooms::all();
        return Rooms::all();
        // return response() -> json($rooms);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rooms::create($request -> all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $room
     * @return \Illuminate\Http\Response
     */
    public function show($room)
    {
        // $room = Rooms::find($room);
        return Rooms::find($room);
        // return response() -> json($room);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rooms  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Rooms $room)
    {
        $room -> update($request -> all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rooms  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rooms $room)
    {
        $room -> delete();
    }
}
