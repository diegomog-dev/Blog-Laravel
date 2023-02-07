@extends('layouts.plantilla')
@section('title', 'Contáctanos')

@section('content')
    <h1>Dejanos un mensaje</h1>

    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        @error('name')
            <small><strong>{{$message}}</strong></small>
        @enderror
        <br>
        <label>
            Correo:
            <br>
            <input type="text" name="correo">
        </label>
        <br>
        @error('correo')
            <small><strong>{{$message}}</strong></small>
        @enderror
        <br>
        <label>
            Mensaje:
            <br>
            <textarea name="mensaje" rows="4"></textarea>
        </label>
        <br>
        @error('mensaje')
            <small><strong>{{$message}}</strong></small>
        @enderror
        <br>
        <button type="submit">Enviar mensaje</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
@endsection
