@extends("layouts.app")

@section("content")
    
    <div class="container_rooms_index">
        <h1>Ici la page room</h1>
        @foreach($rooms as $room)
            <div class="infos_rooms">
                <h2><a href="{{route('rooms.show',$room)}}">{{$room -> name}}</a></h2>
                <h2>Max personne : {{$room -> max_persons}}</h2>
                <h3>Disponible : 
                    @if ($room -> is_active === 0)
                        Non
                    @else
                        Oui
                    @endif</h3>
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
            </div>
        @endforeach
    </div>
@endsection