@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('user.store')}}">
    @csrf
    <div class="form-group">
      <label>Nombre Completo</label>
      <input type="text" name="name" class="form-control" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label>Correo</label>
      <input type="email" name="email" class="form-control" placeholder="correo">
    </div>
    <div class="form-group">
        <label>Contraseña</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
      </div>
    <button type="submit" class="btn btn-primary">Crear</button>
  </form>

@endsection
