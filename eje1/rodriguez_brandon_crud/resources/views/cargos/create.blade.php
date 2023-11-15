@extends ('layout.base')

    @section('content')
    <form class="container-fluid col-8" method="POST" action="{{route('cargos.store')}}">
        @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Id_ocupacion</label>
        <input name="id_ocupacion" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa el id">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Descripcion</label>
        <input name="descripcion" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa la descripcion">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Funciones</label>
        <input name="funciones" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa las funciones">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection