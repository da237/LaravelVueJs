@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <a class="btn btn-warning" href="{{ route('user.create') }}">Nuevo usuario</a>
                    <div class="card-header">Usuarios</div>
                    <div class="card-body">
                        <table>
                            <thead>
                                <tr>
                                    <td>Id</td>
                                    <td>Nombre<td>
                                    <td>Email</td>
                                    {{-- <td>Status</td> --}}
                                    <td>Editar</td>
                                    <td>Eliminar</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}<td>
                                        <td>{{ $user->email }}</td>
                                        {{-- <td>{{ $user->status}}</td> --}}
                                        <td><a href="{{route('user.edit',$user->id)}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                        <td><form action="{{route('user.destroy',$user->id)}}" method="POST">
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

    {{-- <h1>Usuarios</h1>

    <input type="submit" value="Crear Usuario">

    <input type="search" name="" id="" placeholder="Buscar Usuario"> --}}
    {{-- <table>
    <thead>
        <tr>
            <td>Id</td>
            <td>Nombre<td>
            <td>Email</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->full_name}}<td>
            <td>{{$user->email}}</td>
        </tr>
        @endforeach

    </tbody>
</table> --}}
@endsection

@section('footer')

@endsection


