<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="/css/app.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    @yield('content')
  </div>
  <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
