  
@extends('layouts.app')
@section('content')
    <!--<h5>{{$type ?? null}}</h5>
    @foreach($users as $user)
        <p>{{$user->name}}</p>
    @endforeach-->
@include('menu.app')
<div class="container">
    
    <div class="center-horizontal-vertical margin-top-50">
       <span class="welcome-text">¡Bienvenido/a!</span> 
    </div>
    <div>
    <img class="welcome"src="{{asset('/images/welcome.jpeg')}}">
    </div>
</div>
@endsection