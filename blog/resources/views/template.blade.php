
<!doctype html>
<html lang ="{{ app()->getLocale() }}">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}"/>
    </head>

<body>
    @yield('content')
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.js')}}" type="text/javascript"></script>


    @yield('scripts')

</body>
</html>