@extends("layouts.app")

@section("content")
    <h1>Créer un contact</h1>
    <form action="{{route('contacts.store')}}" method="post">
        @csrf
        <input type="text" name="first_name" placeholder="first_name" required>
        <input type="text" name="last_name" placeholder="last_name" required>
        <input type="text" name="job" placeholder="job" required>
        <input type="email" name="email" placeholder="email" required>
        <input type="text" name="phone" placeholder="phone" required>

        <!-- à modifier pour que ça corresponde à la bdd  -->
        <input type="text" name="company_id" placeholder="company" required>
        <button type="submit">
            Ajouter le contact
        </button>
    </form>
@endsection