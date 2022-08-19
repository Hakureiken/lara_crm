@extends("layouts.app")

@section("content")
<div class="container_rooms_show">
    <h1>Vous êtes sur la salle : {{$room -> name}} - Nombre de personne max : {{$room -> max_persons}}</h1>
    <h2>Voici la liste des réservations de cette salle ainsi que les dates</h2>
    <div class="all_rooms_reserved">
        @foreach ($rooms_reserved as $reservation)
            <div class="info_room_reserved">
                <p>Réservé par <span>{{$reservation -> contact -> first_name}} - {{$reservation -> contact -> last_name}}</span></p>
                <p>Du <span>{{$reservation -> begin_date}}</span> au <span>{{$reservation -> end_date}}</span></p>
                <form action="{{route('reservations.destroy',$room)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="">
    
                    <button>Annuler cette réservation</button>
                </form>
            </div>
        @endforeach
    </div>

    <form action="{{route('rooms.destroy',$room)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" id="delete">
            Supprimer la room
        </button>
    </form>
</div>
@endsection