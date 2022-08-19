@extends('layouts.app')

@section("content")
<div class="container_contact_edit">
    <h1>Page pour modifier le contact <span>{{$contact -> first_name}}</span> - <span>{{$contact -> last_name}}</span></h1>
    <div class="personal_info">
        <h2>Job : {{$contact -> job}}</h2>
        <h2>Email  : {{$contact -> email}}</h2>
        <h2>Phone : {{$contact -> phone}}</h2>
        <h2>Companie : {{$contact -> company -> name}}</h2>
    </div>

    <form action="{{route('contacts.update',$contact)}}" method="post">
        @csrf
        @method('PATCH')
        <input type="text" name="first_name" placeholder="first_name" required>
        <input type="text" name="last_name" placeholder="last_name" required>
        <input type="text" name="job" placeholder="job" required>
        <input type="email" name="email" placeholder="email" required>
        <input type="text" name="phone" placeholder="phone" required>

        <!-- à modifier pour que ça corresponde à la bdd  -->
        <input type="text" name="company_id" placeholder="company" required>
        <button type="submit">
            Modifier le contact
        </button>
    </form>
</div>
@endsection