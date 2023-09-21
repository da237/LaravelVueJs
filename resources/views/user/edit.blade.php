@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('user.update', $user->id) }}">
    @method('PUT')
    @csrf
    <label>Nombre</label>
    <input type="text" name="name" value="{{ $user->name }}"> <br>
    @error('name')
        <p style="color: red;">{{ $message }}</p>
    @enderror

    <label>Email</label>
    <input type="email" name="email" value="{{ $user->email }}"> <br>
    @error('description')
        <p style="color: red;">{{ $message }}</p>
    @enderror

    <label>Contraseña</label>
    <input type="password" name="password" value="{{ $user->password }}"> <br>
    @error('description')
        <p style="color: red;">{{ $message }}</p>
    @enderror

    <input type="submit" value="update">
</form>

@endsection
