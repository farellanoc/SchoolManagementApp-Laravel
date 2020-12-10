@extends('layouts.app')

    @section('content')
        @include('menu.app')
        <div class="container">
            <h2 class="margin-top-20">Asignaturas</h2>
            <table class="table table-hover margin-top-20">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Asignatura</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($subjects as $subject)
                <tr>
                    <th scope="row">{{$subject->id}}</th>
                    <td>{{$subject->name}}</td>
                    <td><a href="{{route('subjectTeacher.edit', $subject->id)}}" type="button" class="btn btn-primary">Modificar</a></td>
                </tr>
                @endforeach
                <tr>
                </tr>
                </tbody>
            </table>
        </div>
    @endsection