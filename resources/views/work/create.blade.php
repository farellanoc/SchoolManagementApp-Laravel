@extends('layouts.app')

@section('content')
    @include('menu.app')
    <div class="container">
        {{ Form::open(array('url' => route('work.store'))) }}
            <h2 class="margin-top-20">Trabajos</h2>
            <h5 class="margin-top-20">Elige una asignatura y estudiante para crear un trabajo</h5>
            <div class="row margin-top-20 align-items">
                <label>Asignatura</label>
                {{Form::select('subject_id',$subjects, null, ['class' => 'form-control'])}}
            </div>
            <div class="row margin-top-20 align-items">
                <label>Estudiante</label>
                {{Form::select('user_id',$students, null, ['class' => 'form-control'])}}
            </div>
            <div class="row margin-top-20 align-items">
                <label>Nombre</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div class="row margin-top-20 align-items">
                <label>Nota</label>
                <input class="form-control" type="text" name="mark">
            </div>
            <div class="row margin-top-20 align-items">
                <label for="time-input-inicio">Inicio</label>
                <input class="form-control" type="date" name="time_start">
            </div>
            <div class="row margin-top-20 align-items">
                <label for="time-input-fin">Fin</label>
                <input class="form-control" type="date" name="time_end">
            </div>
            <div class="row margin-top-20 align-items">
                    {{ Form::select('days[]', $days, null, ['id' => 'days', 'multiple' => 'multiple', 'class'=>'custom-select', 'name'=> 'days[]'])}}
                </div>           
            <div class="form-group text-center margin-top-20">
                <button class="btn btn-success btn-submit">Guardar</button>
            </div>
        {{ Form::close() }}
    </div>
@endsection

