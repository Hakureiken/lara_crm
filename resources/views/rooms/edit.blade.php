@extends("layouts.app")

@section("content")
    <h1>Modifier une room</h1>
    <form action="{{route('rooms.update',$room)}}" method="get">
        @csrf
        @method('PATCH')
        <input type="text" name="name" placeholder="nom de la room" required>
        <input type="text" name="ref_room" placeholder="référence de la room" required>
        <input type="text" name="max_persons" placeholder="nombre de personnes max" required>
        <input type="text" name="is_active" placeholder="est-elle disponible?" required>

        <button type="submit">
            Ajouter la room
        </button>
    </form>
@endsection