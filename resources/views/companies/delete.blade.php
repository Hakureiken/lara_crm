@extends("layouts.app")

@section("content")
    <h1>Effacer une companie</h1>
    <form action="{{route('companies.destroy',$company)}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="nom de la companie" required>
        <input type="text" name="adress" placeholder="adresse" required>
        <input type="text" name="postal_code" placeholder="code postale" required>
        <input type="email" name="city" placeholder="ville" required>
        <input type="text" name="siret" placeholder="siret" required>

        <button type="submit">
            Ajouter la companie
        </button>
    </form>
@endsection