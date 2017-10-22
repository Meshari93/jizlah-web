<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jizlah') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">


        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
  $(".select2-multpl").select2();
     // $('.js-example-basic-single').select2();
$(".js-example-rtl").select2({
  dir: "rtl"
});
    $('.js-example-basic-single').select2();

$(".js-example-basic-multiple-limit").select2({
  maximumSelectionLength: 1
});
  </script>

      {!! Toastr::message() !!}

</body>
</html>
