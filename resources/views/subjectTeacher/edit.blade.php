@extends('layouts.app')

    @section('content')
        @include('menu.app')
        <div class="container">
            {{ Form::open(array('url' => route('subjectTeacher.update',$subjectTeacher->id))) }}
            @method('PUT')
            <h2 class="margin-top-20">Asignaturas</h2>
            <div class="row margin-top-20 align-items">
                <label>Profesor</label>
                {{Form::select('user_id',$teachers, $subjectTeacher->user_id, ['class' => 'form-control'])}}
            </div>
            <div class="row margin-top-20 align-items">
                <label>Nombre</label>
                <input class="form-control" type="text" name="name" value="{{$subjectTeacher->name}}">
            </div>
            <div class="row margin-top-20 align-items">
                <label>Color</label>
                {{Form::select('color',['B22222'=>'FireBrick','FF0000'=>'Red','FA8072'=>'Salmon'], $subjectTeacher->color, ['class' => 'form-control'])}}
            </div>
            <div class="form-group text-center margin-top-20">
                <button class="btn btn-success btn-submit">Guardar</button>
            </div>
            {{ Form::close() }}
        </div>
    @endsection