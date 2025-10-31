<!doctype html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Employee CRUD')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        rel="stylesheet">

  <style>
    body { background-color: #f8f9fa; }
    nav.navbar { box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
    table th, table td { vertical-align: middle; }
  </style>
</head>

<body class="bg-light">
  <nav class="navbar navbar-expand-lg bg-white border-bottom mb-3">
    <div class="container">
      <a class="navbar-brand fw-semibold" href="{{ route('employees.index') }}">Employee CRUD</a>
    </div>
  </nav>

  <main class="container">
    @if ($errors->any())
      <div class="alert alert-danger">
        <div class="fw-bold mb-1">Lỗi nhập liệu:</div>
        <ul class="mb-0">
          @foreach ($errors->all() as $e) <li>{{ $e }}</li> @endforeach
        </ul>
      </div>
    @endif

    @if (session('ok'))
      <div class="alert alert-success">{{ session('ok') }}</div>
    @endif

    @yield('content')
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
          crossorigin="anonymous"></script>
</body>
</html>
