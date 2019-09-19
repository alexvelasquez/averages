<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Averages</title>



   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="page-top">
<div id="app">
        @include('layouts.navbar')
        <div id="wrapper">
        @include('layouts.sidebar')
        <div id="content-wrapper">
        <main class="py-4">
            @yield('content')
        </main>
        </div>
<!-- /.container-fluid -->

<!-- Sticky Footer -->
<footer class="sticky-footer">
<div class="container my-auto">
  <div class="copyright text-center my-auto">
    <span>Copyright © Your Website 2019</span>
  </div>
</div>
</footer>

</div>
<!-- /.content-wrapper -->

        </div>
         <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
</div>
 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer></script>
 <script src="https://kit.fontawesome.com/e2f6bcc9af.js"></script>

</body>
</html>
