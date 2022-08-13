@extends('layouts.app')

@section('content')
    <h1>La salle '<span class="reservation_room_name">{{$room -> name}}</span>' est déjà réservé par '<span class="reservation_contact_name">{{$contact -> first_name}} {{$contact -> last_name}}</span>'</h1>
    {{-- {{var_dump($reservation)}}
    {{var_dump($room)}} --}}
@endsection