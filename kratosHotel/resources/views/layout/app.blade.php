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
        <li class="nav-item"><a href="../roles/create" class="nav-link">Roles</a></li>
        <li class="nav-item"><a href="../users/create" class="nav-link">Usuario</a></li>
        <li class="nav-item"><a href="../customer/create" class="nav-link">Clientes</a></li>
        <li class="nav-item"><a href="../employee/create" class="nav-link">Empleados</a></li>
      </ul>
    </header>
  </div>
    @yield('content')
</body>
</html>