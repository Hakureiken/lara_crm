@extends('layouts.app')

@section('content')
<div class="container">
    {{-- affichage des salles déjà réservées --}}
    <div class="room_reserved">
        <h2>Salles déjà réservées</h2>
    @foreach ($reservations as $reservation)
            @if ($reservation -> room -> is_active === 0)
                <div class="room">
                    <h3>Nom de la salle : {{$reservation -> room -> name}} - Référence : {{$reservation -> room -> ref_room}}</h2>

                    <h3>Maximum de personne autorisé : {{$reservation -> room -> max_persons}} - Prix : {{$reservation -> room -> price}} €</h3>

                    <h3>Réservé par : {{$reservation -> contact -> first_name}} - {{$reservation -> contact -> last_name}}</h3>
                </div>          
            @endif
        @endforeach
    </div>

    {{-- affichage des salles libre --}}
    <div class="room_free">
        <h2>Salles disponibles</h2>
        @foreach ($reservations as $reservation)
            @if ($reservation -> room -> is_active === 1)
                <div class="room">
                    <h3>Nom de la salle : {{$reservation -> room -> name}} - Référence : {{$reservation -> room -> ref_room}}</h2>

                    <h3>Maximum de personne autorisé : {{$reservation -> room -> max_persons}} - Prix : {{$reservation -> room -> price}} €</h3>

                    <form action="{{route('reservations.update',$reservation -> room_id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <button>
                            Réserver cette salle
                        </button>                
                    </form>
                </div>
                            
            @endif
        @endforeach
    </div>
</div>
    
@endsection

