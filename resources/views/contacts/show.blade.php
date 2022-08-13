@extends("layouts.app")

@section("content")

    <h1>{{$contact -> first_name}} - {{$contact -> last_name}}</h1>
    <h2>ID : {{$contact -> id}}</h2>
    <div class="edit_delete">
        <form action="{{route('contacts.destroy',$contact)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">
                Supprimer le contact
            </button>
        </form>

        <form action="{{route('contacts.edit',$contact)}}" method="post">
            @csrf
            <button type="submit">
                Modifier le contact
            </button>
        </form>
    </div>
@endsection