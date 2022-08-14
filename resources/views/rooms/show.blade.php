@extends("layouts.app")

@section("content")
    <h1>Nom de la salle : {{$room -> name}} - Nombre de personne max : {{$room -> max_persons}}</h1>
    <h2>Liste des réservations de cette salle</h2>
    @foreach ($rooms_reserved as $reservation)
        <p>Réservé par <span>{{$reservation -> contact -> first_name}} - {{$reservation -> contact -> last_name}}</span></p>
        <p>Du {{$reservation -> begin_date}} au {{$reservation -> end_date}}</p>
    @endforeach
    <form action="{{route('rooms.destroy',$room)}}" method="post">
        @csrf
        @method('DELETE')
        <div>
            {{var_dump($room -> id)}}
        </div>
        <button type="submit">
            Supprimer la room
        </button>
    </form>
@endsection