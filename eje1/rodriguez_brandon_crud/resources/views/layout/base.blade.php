<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Inicio</a></li>
        <li class="nav-item"><a href="{{route('ocupaciones.create')}}" class="nav-link">Ocupaciones</a></li>
        <li class="nav-item"><a href="{{route('cargos.create')}}" class="nav-link">Cargos</a></li>
        <li class="nav-item"><a href="{{route('profesiones.create')}}" class="nav-link">Profesiones</a></li>
      </ul>
    </header>
  </div>
    @yield('content')
</body>
</html>