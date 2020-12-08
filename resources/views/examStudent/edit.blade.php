@extends('layouts.app')

@section('content')
    @include('menu.app')
    <div class="container">
        {{ Form::open(array('url' => route('exam.update',$exam->id))) }}
        @method('PUT')
        <h2 class="margin-top-20">Exámenes</h2>
        <div class="row margin-top-20 align-items">
            <label>Asignatura</label>
            {{Form::select('subject_id',$subjects, $exam->subject->id, ['class' => 'form-control'])}}
        </div>
        <div class="row margin-top-20 align-items">
            <label>Estudiante</label>
            {{Form::select('user_id',$students, $exam->user->id, ['class' => 'form-control'])}}
        </div>
        <div class="row margin-top-20 align-items">
            <label>Nombre</label>
            <input class="form-control" type="text" name="name" value="{{$exam->name}}">
        </div>
        <div class="row margin-top-20 align-items">
            <label>Nota</label>
            <input class="form-control" type="text" name="mark" value="{{$exam->mark}}">
        </div>
        <div class="row margin-top-20 align-items">
            <label for="time-input-inicio">Inicio</label>
            <input class="form-control" type="date" name="time_start" value="{{$exam->time_start}}">
        </div>
        <div class="row margin-top-20 align-items">
            <label for="time-input-fin">Fin</label>
            <input class="form-control" type="date" name="time_end"  value="{{$exam->time_end}}">
        </div>
        <div class="row margin-top-20 align-items">
            <label>Días</label>
            {{ Form::select('days[]', $days, null, ['id' => 'days', 'multiple' => 'multiple', 'class'=>'custom-select', 'name'=> 'days[]'])}}
        </div>             
        <div class="form-group text-center margin-top-20">
            <button class="btn btn-success btn-submit">Guardar</button>
        </div>
        {{ Form::close() }}
    </div>
@endsection