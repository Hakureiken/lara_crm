@extends("layouts.app")

@section("content")
    <h1>Nom de la salle : {{$room -> name}} - Nombre de personne max : {{$room -> max_persons}}</h1>
    <h2>ID : {{$room -> id}}</h2>
    <h3>Disponible : {{$room -> is_active}}</h3>
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