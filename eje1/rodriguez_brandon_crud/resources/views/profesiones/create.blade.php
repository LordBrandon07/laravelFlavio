@extends ('layout.base')

    @section('content')
    <form class="container-fluid col-8" method="POST" action="{{route('profesiones.store')}}">
        @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa el nombre">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Titulo</label>
        <input name="titulo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa el titulo">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection