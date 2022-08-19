@extends("layouts.app")

@section("content")
<div class="container_contacts_show">
    <h1><span>{{$contact -> first_name}}<span> - <span>{{$contact -> last_name}}</span></h1>
    <h2>Job : <span>{{$contact -> job}}</span>, au sein de l'entreprise : <span>{{$contact -> company -> name}}</span></h2>
    <h2>Email : <span>{{$contact -> email}}</span> - Phone : <span>{{$contact -> phone}}</span></h2>
    
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
@endsection