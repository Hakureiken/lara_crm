<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite(['resources/css/app.scss','resources/js/app.js'])

    </head>
    <body>
        <div id="example"></div>
        <script type="text/babel" src="{{asset('js/app.js')}}" defer></script>
    </body>
</html>