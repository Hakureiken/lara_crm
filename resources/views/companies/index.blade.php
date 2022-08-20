@extends("layouts.app")

@section("content")
<div class="container_companies_index">
    <h1>Ici la page des companies</h1>
    @foreach($companies as $company)
    <div class="infos_company">

        <h2><a href="{{route('companies.show',$company)}}"><span>{{$company -> name}}</span></a></h2>
        <h2>Adresse : <span>{{$company -> adress}}</span> - Ville : <span>{{$company -> postal_code}}</span> <span>{{$company -> city}}</span></h2>
        <h3>SIRET : <span>{{$company -> siret}}</span></h3>
        <form action="{{route('companies.destroy',$company)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">
                Supprimer
            </button>
        </form>
    </div>
    @endforeach
</div>
@endsection