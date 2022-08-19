@extends('layouts.app')

@section('content')

<h1>Faire une réservation</h1>
{{-- condition d'affichage, si la salle est déjà réservée dans la tranche demandée, on affichera ce message grâce au controller --}}
@if (isset($reservation_failed))
    <span>{{$reservation_failed}}</span>
@endif
<form action="{{route('reservations.store')}}" method="post">
    @csrf
    {{-- contact_id -> normalement on doit récupérer dans les cookies ou la variable de session son id mais ce n'est pas fait --}}
    <input type="hidden" name="contact_id" value="2" required>

    <select name="room_id" required>
        
        @if (isset($room_choice))
            <option value="{{$rooms[$room_choice - 1] -> id}}" selected>{{$rooms[$room_choice - 1] -> name}} - {{$rooms[$room_choice - 1] -> max_persons}} personnes - {{$rooms[$room_choice - 1] -> price}}€</option>
        @else
            <option selected disabled>Selectionner la salle que vous souhaitez réserver</option>
        @endif

        @foreach ($rooms as $room)
            <option value="{{$room -> id}}">{{$room -> name}} - {{$room -> max_persons}} personnes - {{$room -> price}}€</option>
        @endforeach
    </select>

    <input type="datetime-local" name="begin_date" required>
    <input type="datetime-local" name="end_date" required>

    <button type="submit">
        Réserver
    </button>
</form>
@endsection