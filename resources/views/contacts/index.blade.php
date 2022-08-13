@extends("layouts.app")

@section("content")
    <h1>Ici la page contact</h1>

    @foreach($contacts as $contact)

        <h2><a href="{{route('contacts.show',$contact)}}">{{$contact -> first_name}} - {{$contact -> last_name}}</a></h2>
        <h3>Email : {{$contact -> email}} - Phone : {{$contact -> phone}}</h3>
        <div class="edit_delete">
            <form action="{{route('contacts.destroy',$contact)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">
                    Supprimer le contact
                </button>
            </form>

            <form action="{{route('contacts.edit',$contact)}}" method="get">
                @csrf
                <button type="submit">
                    Modifier le contact
                </button>
            </form>
        </div>
        
    @endforeach
@endsection