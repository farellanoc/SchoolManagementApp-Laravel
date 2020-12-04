@extends('layouts.app')

@section('content')
    @include('menu.app')
    <div class="container">
        <h2 class="margin-top-20">Trabajos</h2>
        @can('canAdminWork')
        <a href="{{route('work.create')}}" type="button" class="btn btn-primary margin-top-20">Crear trabajo</a>
        @endcan
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
                @foreach ($works as $work)
                    <tr>
                        <th scope="row">{{$work->id}}</th>
                        <td>{{$work->subject_id}}</td>
                        <td>{{$work->user_id}}</td>
                        <td>{{$work->name}}</td>
                        <td>{{$work->mark}}</td>
                        <td>{{$work->time_start}}</td>
                        <td>{{$work->time_end}}</td>
                        <td>{{$work->days}}</td>
                        @can('canAdminWork')<td><a href="{{route('work.edit', $work->id)}}" type="button" class="btn btn-primary">Modificar</a></td>@endcan
                        @can('canAdminWork')<td>
                            {{ Form::open(array('url' => route('work.destroy', $work->id))) }}
                                @method('DELETE')
                               <button type="submit" class="btn btn-danger btn-submit">Borrar</button>
                            {{ Form::close() }}
                        </td>@endcan
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
