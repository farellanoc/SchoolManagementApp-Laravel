@extends('layouts.app')
 @section('content')
     {{$work}}
     @include('menu.app')
     <div class="container">
         <h2 class="margin-top-20">Trabajos</h2>
         <div class="row margin-top-20 align-items">
             <label>Asignatura</label>
             <input class="form-control" type="text" name="subject_idValue">
         </div>
         <div class="row margin-top-20 align-items">
            <label>Alumno</label>
             <input class="form-control" type="text" name="user_idValue">
        </div>
        <div class="row margin-top-20 align-items">
            <label>Nombre</label>
            <input class="form-control" type="text" name="nameValue">
        </div>
        <div class="row margin-top-20 align-items">
            <label>Nota</label>
            <input class="form-control" type="text" name="markValue">
        </div>
         <div class="row margin-top-20 align-items">
             <label for="time-input-inicio">Inicio</label>
             <input class="form-control" type="time" value="10:00" id="time-input-inicio">
         </div>
         <div class="row margin-top-20 align-items">
             <label for="time-input-fin">Fin</label>
             <input class="form-control" type="time" value="11:00" id="time-input-fin">
         </div>
         <div class="row margin-top-20 align-items">
            <label>Días</label>
            {{ Form::select('days[]', $days, null, ['id' => 'days', 'multiple' => 'multiple', 'class'=>'custom-select', 'name'=> 'days[]'])}}
        </div>            
        </div>
         <div class="form-group text-center margin-top-20">
             <button class="btn btn-success btn-submit">Guardar</button>
         </div>
     </div>
 @endsection