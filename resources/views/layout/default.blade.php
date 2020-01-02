<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Oipnet - Developpement et formation web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">    

    <link rel="stylesheet" href="css/app.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">
        @include('partials._menu')
        @yield('content')
        <script src="{{ mix('js/app.js') }}"></script>
    </div>
  </body>
</html>