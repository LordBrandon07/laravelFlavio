@extends ('layout.app')

    @section('content')
    <form class="container-fluid col-8" method="POST" action="{{route('customer.store')}}">
        @csrf
    <div class="form-group">
        <label for="documento_customer">Documento</label>
        <input name="documento" type="text" class="form-control" id="documento_customer" placeholder="Ingresa el nombre">
    </div>
    <div class="form-group">
        <label for="direccion_customer">Direccion</label>
        <input name="direccion" type="text" class="form-control" id="direccion_customer" placeholder="Ingresa la descripcion">
    </div>
    <br>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @endsection