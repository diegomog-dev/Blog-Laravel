@extends('layouts.plantilla')
@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a la página cursos</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <ul>
        @foreach ($cursos as $curso)
        <li>
            <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a>
        </li>
        @endforeach
    </ul>
    <br>
    {{$cursos->links()}}
@endsection
