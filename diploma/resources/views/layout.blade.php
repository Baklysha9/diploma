
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.ico">

    <title>Kosmetikerin Elena Brezger</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  </head>

  <body>

        @include('layouts.nav')

        @yield('content')
 
        @include('layouts.footer')
  
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery.maskedinput.js') }}"></script>

</body>
</html>