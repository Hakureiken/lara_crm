@extends("layouts.app")

@section("content")
    <h1>Ici la page companie</h1>

    @foreach($companies as $company)

        <h2><a href="{{route('companies.show',$company)}}">{{$company -> name}} - {{$company -> adress}}</a></h2>
        <h3>SIRET : {{$company -> siret}}</h3>

        <form action="{{route('companies.destroy',$company)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">
                Supprimer la companie
            </button>
        </form>
    @endforeach
@endsection