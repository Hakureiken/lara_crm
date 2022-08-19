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
        $rooms = Rooms::all();
        return view('reservations.index', compact('reservations','rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $rooms = Rooms::all();
        $room_choice = $request -> room_id;

        return view('reservations.create', compact('rooms','room_choice'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // on va transmettre à la page index de reservations toutes les infos des tables rooms et reservations
        $reservations = Reservations::all();
        $rooms = Rooms::all();
        $count = 0; // variable de check pour le foreach
        // on créé une nouvelle instance pour l'intégrer dans la bdd
        $reservation = new Reservations;

        $reservation -> contact_id = $request -> contact_id;
        $reservation -> room_id = $request -> room_id;
        $reservation -> begin_date = $request -> begin_date;
        $reservation -> end_date = $request -> end_date;
        $reservation -> created_at = date('Y-m-d H:i:s');
        $reservation -> updated_at = date('Y-m-d H:i:s');


        // on va chercher la room réservé et passer sa disponibilité à "faux"
        $room_reserved = Rooms::find($reservation -> room_id);
        $room_reserved -> is_active = 0;
        $room_reserved -> save();

        // on va aller check s'il y a dans la bdd une réservation déjà effectuée sur cette salle aux dates demandées

        $all_already_reserved = Reservations::all() -> where('room_id', $reservation -> room_id);

        // si la nouvelle réservation est après la fin d'une autre réservation ou que la fin de la nouvelle réservation est avant le début d'une autre, c'est OK.

        // if () {
            
        // } else {
            
        // }
        foreach ($all_already_reserved as $key => $already_reserved) {
            if ($reservation -> begin_date > $already_reserved -> end_date || $reservation -> end_date < $already_reserved -> begin_date) {

                $count++;
                
            } else {

                $reservation_failed = "réservation impossible, la date n'est pas disponible";

                return view('reservations.create', compact('reservation_failed', 'reservations','rooms'));
            }

        }

        $reservation -> save();
        return view('reservations.index', compact('reservations','rooms'));
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
        
    }
}
