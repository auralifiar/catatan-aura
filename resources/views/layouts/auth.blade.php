<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <title>Peduli Diri</title>
</head>

<body class="bg-light">
  <div class="container mt-5 ">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="card mt-5">
          <div class="card-body py-5">
            <h2 class="text-center">PEDULI DIRI</h2>
            <p class="text-center text-secondary small mb-5">CATATAN PERJALANAN</p>

            <!-- form -->
            @yield('content')
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>