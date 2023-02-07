@extends('layouts.plantilla')
@section('title', 'Cursos - Create')

@section('content')
    <h1>En esta página se podrá crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br>

        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5">{{old('description')}}</textarea>
        </label>
        @error('description')
        <br>
            <small>*{{$message}}</small>
        <br>
    @enderror
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        @error('categoria')
        <br>
            <small>*{{$message}}</small>
        <br>
    @enderror
        <br>
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection

