
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Пример на bootstrap 4: Прайслист - пример страницы с ценой, созданной с помощью карт, с пользовательским верхнего и нижнего колонтитула.">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Kosmetikerin Elena Brezger</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <!-- <link href="pricing.css" rel="stylesheet"> -->
    
  </head>

  <body>

        @include('layouts.nav')

        @yield('content')
 
        @include('layouts.footer')
  
<!--jQuery-->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="{{ asset('js/app.js') }}"></script>


</body>
</html>