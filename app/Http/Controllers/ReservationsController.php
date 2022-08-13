<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Contacts;
use App\Models\Reservations;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservations::all();
        
        return view('reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservations  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservations $reservation)
    {
        
        $room = Rooms::find($reservation -> room_id);
        $contact =  Contacts::find($reservation -> contact_id);
        return view('reservations.show', compact('reservation', 'room', 'contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservations  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservations $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservations  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservations $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservations  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservations $reservation)
    {
        //
    }
}
