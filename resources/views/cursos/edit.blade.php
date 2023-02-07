@extends('layouts.plantilla')
@section('title', 'Cursos - Editar')

@section('content')
    <h1>En esta página se podrá editar un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}"">
        </label><br>
        @error('name')
        <small>*{{message}}</small>
        @enderror

        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5">{{old('description', $curso->description)}}</textarea>
        </label>
        <br>
        @error('description')
        <small>*{{message}}</small>
        @enderror
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}"">
        </label>
        <br>
        @error('categoria')
        <small>*{{message}}</small>
        @enderror
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
