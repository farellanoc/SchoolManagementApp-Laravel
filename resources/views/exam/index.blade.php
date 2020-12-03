
    @extends('layouts.app')

@section('content')
    @include('menu.app')
    <div class="container">
        <h2 class="margin-top-20">Exámenes</h2>
        @can('canAdminExam')
        <a href="{{route('exam.create')}}" type="button" class="btn btn-primary margin-top-20">Crear examen</a>
        @endcan
        <div class="table-responsive margin-top-20">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">ID Asignatura</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Inicio</th>
                    <th scope="col">Fin</th>
                    <th scope="col">Días</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($exams as $exam)
                    <tr>
                        <th scope="row">{{$exam->id}}</th>
                        <td>{{$exam->course->name}}</td>
                        <td>{{$exam->name}}</td>
                        <td>{{$exam->time_start}}</td>
                        <td>{{$exam->time_end}}</td>
                        <td>{{$exam->days}}</td>
                        @can('canAdminExam')<td><a href="{{route('course.edit', $course->id)}}" type="button" class="btn btn-primary">Modificar</a></td>
                        <td>
                            {{ Form::open(array('url' => route('course.destroy', $course->id))) }}
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
