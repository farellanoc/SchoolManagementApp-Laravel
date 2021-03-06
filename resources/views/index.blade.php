@extends('layouts/welcome')

@section('indexContent')
<div class="relative flex items-top justify-center min-h-screen text-white sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-white underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-white underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif

        </div>
        @endsection