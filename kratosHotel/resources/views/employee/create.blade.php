@extends ('layout.app')

    @section('content')
    <form class="container-fluid col-8" method="POST" action="{{route('roles.store')}}">
        @csrf
    <div class="form-group">
        <label for="nombre_roles">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="nombre_roles" placeholder="Ingresa el nombre">
    </div>
    <div class="form-group">
        <label for="descripcion_roles">Descripcion</label>
        <input name="descripcion" type="text" class="form-control" id="descripcion_roles" placeholder="Ingresa la descripcion">
    </div>
    <br>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @endsection