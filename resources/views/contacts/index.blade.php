@extends("layouts.app")

@section("content")
<div class="container_contacts_index">

    <h1>Ici la page contact</h1>

    @foreach($contacts as $contact)
    <div class="info_contact">

        <h2><a href="{{route('contacts.show',$contact)}}">{{$contact -> first_name}} - {{$contact -> last_name}}</a></h2>
        <h3>Email : {{$contact -> email}} - Phone : {{$contact -> phone}}</h3>
        <div class="edit_delete">
            <form action="{{route('contacts.destroy',$contact)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">
                    Supprimer
                </button>
            </form>

            <form action="{{route('contacts.edit',$contact)}}" method="get">
                @csrf
                <button type="submit">
                    Modifier
                </button>
            </form>
        </div>
    </div>
        
    @endforeach
</div>
@endsection