<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Reservations;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Rooms::all();

        return view('rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rooms = new Rooms;

        $rooms -> name = $request -> name;
        $rooms -> ref_room = $request -> ref_room;
        $rooms -> max_perosns = $request -> max_perosns;
        $rooms -> is_active = $request -> is_active;

        $rooms -> save();

        return redirect() -> route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function show(Rooms $room)
    {
        $rooms_reserved = Reservations::all() -> where('room_id', $room -> id);
        return view('rooms.show', compact('room','rooms_reserved'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function edit(Rooms $room)
    {
        $rooms = Rooms::all();
        $room = $rooms -> find($room);

        return view('rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rooms $room)
    {
        $room = Rooms::select("*")->where(['id' => $room->id])->firstOrFail();

        $room -> name = $request -> name;
        $room -> adress = $request -> adress;
        $room -> postal_code = $request -> postal_code;
        $room -> city = $request -> city;
        $room -> siret = $request -> siret;

        $room -> save();

        return redirect() -> route('rooms.show', $room -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rooms $room)
    {
        $room = Rooms::find($room -> id);
        
        $room -> delete();
        
        return redirect() -> route('rooms.index');
    }
}
