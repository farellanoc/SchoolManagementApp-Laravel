@extends('layouts.app')

@section('content')
    @include('menu.app')
    <div class="container">
        <h2 class="margin-top-20">Exámenes</h2>
        <div class="table-responsive margin-top-20">
     <table class="table">
         <thead>
         <tr>
             <th scope="col">ID</th>
             <th scope="col">Asignatura</th>
             <th scope="col">Alumno</th>
             <th scope="col">Nombre</th>
             <th scope="col">Nota</th>
             <th scope="col">Inicio</th>
             <th scope="col">Fin</th>
             <th scope="col">Días</th>
             <th scope="col"></th>
             <th scope="col"></th>
             <th scope="col"></th>
         </tr>
         </thead>
         <tbody>
                @foreach ($examStudent as $exam)
                    <tr>
                        <th scope="row">{{$exam->id}}</th>
                        <td>{{$exam->subject_id}}</td>
                        <td>{{$exam->user_id}}</td>
                        <td>{{$exam->name}}</td>
                        <td>{{$exam->mark}}</td>
                        <td>{{$exam->time_start}}</td>
                        <td>{{$exam->time_end}}</td>
                        <td>{{$exam->days}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
