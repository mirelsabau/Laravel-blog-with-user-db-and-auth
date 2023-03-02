<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{asset('css/app.css')}}" rel="stylesheet"> 
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head> 
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="container">
            <br>
            @include('inc.messages')
            @yield('content')
        </div>
    </div>

    <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
      <script>
        CKEDITOR.replace( 'article-ckeditor' );

    </script>
    <script>
        try { CKEDITOR.replace( 'article-ckeditor' ) }
        catch { };
    </script>
</body>
</html>
