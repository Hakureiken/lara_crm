@extends("layouts.app")

@section("content")
    <h1>Ici la page room</h1>

    @foreach($rooms as $room)

        <h2><a href="{{route('rooms.show',$room)}}">{{$room -> name}}</a></h2>
        <h2>max personne : {{$room -> max_persons}}</h2>
        <h3>Disponible : {{$room -> is_active}}</h3>
        <div class="edit_delete">
            <form action="{{route('rooms.destroy',$room)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">
                    Supprimer la room
                </button>
            </form>

            <form action="{{route('reservations.show',$room)}}" method="get">
                @csrf
                <button type="submit">
                    Faire une réservation
                </button>
            </form>
        </div>
        
    @endforeach
@endsection