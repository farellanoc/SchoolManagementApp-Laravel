  
@extends('layouts.app')
@section('content')
    <!--<h5>{{$type ?? null}}</h5>
    @foreach($users as $user)
        <p>{{$user->name}}</p>
    @endforeach-->
@include('menu.app')
<div class="container">
    <div class="center-horizontal-vertical margin-top-50">
        <img class="welcome-image"src="{{asset('/images/Welcome.jpeg')}}">
    </div>
</div>
 </body>
</html>
