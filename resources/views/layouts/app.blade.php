<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @viteReactRefresh
    @vite(['resources/css/app.scss','resources/js/app.js'])
    <title>Rooms</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{route('rooms.index')}}">Liste des rooms</a></li>
            <li><a href="{{route('reservations.index')}}">Liste des réservations</a></li>
            <li><a href="{{route('contacts.index')}}">Liste des contacts</a></li>
            <li><a href="{{route('companies.index')}}">Liste des companies</a></li>
        </ul>
    </nav>
    {{-- @include("layouts.partials.nav") --}}
    @yield("content")
</body>
</html>