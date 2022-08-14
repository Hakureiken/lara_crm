@extends('layouts.app')

@section('content')
<h1>Faire une réservation</h1>
@if (isset($reservation_failed))
    <span>{{$reservation_failed}}</span>
@endif

<form action="{{route('reservations.store')}}" method="post">
    @csrf
    {{-- contact_id -> normalement on doit récupérer dans les cookies ou la variable de session son id mais ce n'est pas fait --}}
    <input type="hidden" name="contact_id" value="2" required>

    <select name="room_id" required>
        <option selected disabled>Selectionner la salle que vous souhaitez réserver</option>
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