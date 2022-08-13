@extends("layouts.app")

@section("content")
    <h1>Créer un contact</h1>
    <form action="{{route('companies.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="nom de la companie" required>
        <input type="text" name="adress" placeholder="adresse" required>
        <input type="text" name="postal_code" placeholder="code postale" required>
        <input type="text" name="city" placeholder="ville" required>
        <input type="text" name="siret" placeholder="siret" required>

        <button type="submit">
            Ajouter la companie
        </button>
    </form>
@endsection