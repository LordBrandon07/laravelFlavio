@extends ('layout.base')

    @section('content')
    <form class="container-fluid col-8" method="POST" action="{{route('ocupaciones.store')}}">
        @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa el nombre">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
