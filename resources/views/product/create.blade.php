@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        <div class="form-group">
            <label>Nombre Producto</label>
            <input type="text" name="name" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label>Precio</label>
            <input type="number" name="price" class="form-control" placeholder="Price">
        </div>
        <div class="form-group">
            <label>Cantidad</label>
            <input type="number" name="stock" class="form-control" placeholder="Cantidad">
        </div>
        {{-- <div class="form-group">
            <label>Descripcion</label>
            <textarea type="email" name="description" class="form-control" placeholder="description">
        </div> --}}
        <div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </div>

    </form>
@endsection
