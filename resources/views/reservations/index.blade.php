@extends('layouts.app')

@section('content')

<div class="container">
    {{-- affichage des salles déjà réservées --}}
    <div class="room_reserved">
        <h2>Salles déjà réservées</h2>
        {{-- {{dd($reservations -> isEmpty())}} --}}
        @if (!($reservations -> isEmpty()))
            @foreach ($reservations as $reservation)
            {{-- {{var_dump($reservation -> room -> is_active)}} --}}
                @if ($reservation -> room -> is_active === 0)
                    <div class="room">
                        <h3>Nom de la salle : {{$reservation -> room -> name}} - Référence : {{$reservation -> room -> ref_room}}</h2>

                        <h3>Maximum de personne autorisé : {{$reservation -> room -> max_persons}} - Prix : {{$reservation -> room -> price}} €</h3>

                        <h3>Réservé par : {{$reservation -> contact -> first_name}} - {{$reservation -> contact -> last_name}}</h3>

                        <h4>Sur la période : <span>{{$reservation -> begin_date}}</span> au <span>{{$reservation -> end_date}}</span></h4>
                    </div>          
                @endif
            @endforeach
        @else
            Aucune salle n'est réservée
        @endif
    </div>

    {{-- affichage des salles libre --}}
    <div class="room_free">
        <h2>Salles disponibles</h2>
        {{-- {{var_dump($rooms)}} --}}
        {{-- @if (!($rooms -> isEmpty())) --}}
            @foreach ($rooms as $room)
                @if ($room -> is_active === 1)
                    <div class="room">
                        <h3>Nom de la salle : {{$room -> name}} - Référence : {{$room -> ref_room}}</h2>

                        <h3>Maximum de personne autorisé : {{$room -> max_persons}} - Prix : {{$room -> price}} €</h3>

                        <form action="{{route('reservations.create')}}" method="get">
                            @csrf
                            <input type="hidden" name="room_id" value="{{$room -> id}}" required>

                            <button>
                                Réserver cette salle
                            </button>                
                        </form>
                    </div>
                @endif
            @endforeach    
        {{-- @else
            Aucune salle n'est à réservée
        @endif --}}
    </div>
</div>
    <div id="example"></div>
@endsection

