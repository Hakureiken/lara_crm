@extends("layouts.app")

@section("content")
<div class="container_companies_show">

    <h1>{{$company -> name}} - {{$company -> adress}}</h1>
    <h2>ID : {{$company -> id}}</h2>
    <h3>SIRET : {{$company -> siret}}</h3>
    <form action="{{route('companies.destroy',$company -> id)}}" method="post">
        @csrf
        @method('DELETE')
        <div>
            {{var_dump($company -> id)}}
        </div>
        <button type="submit">
            Supprimer le contact
        </button>
    </form>
</div>
@endsection