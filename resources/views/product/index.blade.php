@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <a class="btn btn-warning" href="{{ route('product.create') }}">Nuevo Producto</a>
                    <div class="card-header">Productos</div>
                    <div class="card-body">
                        <table border="solid">
                            <thead>
                                <tr>
                                    <td>Id</td>
                                    <td>Nombre<td>
                                    <td>Precio</td>
                                    <td>Cantidad</td>
                                    <td>Descrpcion</td>
                                    <td>Editar</td>
                                    <td>Eliminar</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}<td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{$product->stock}}</td>
                                        <td>{{$product->description}}</td>
                                        <td><a href="{{route('product.edit',$product->id)}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                        <td><form action="{{route('product.destroy',$product->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Eliminar">
                                            {{-- <i class="fa-solid fa-trash"></i> --}}
                                        </form></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')

@endsection
