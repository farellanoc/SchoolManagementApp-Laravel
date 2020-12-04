<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Programa gestión educativa</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header id="first">
        <div class="header-content">
            <div class="inner">
                <h1 class="cursive">Aprender, nunca había sido tan sencillo</h1>
                <h4>Accede a tu cuenta o créate una para empezar</h4>
                <hr>
                @if (Route::has('login'))
                @auth
                <a class="btn btn-success btn-xl" href="{{ url('/home') }}">Home</a>
                @else
                <a class="btn btn-success btn-xl" href="{{ route('login') }}">Login</a> &nbsp;
                @if (Route::has('register'))
                <a class="btn btn-info btn-xl" href="{{ route('register') }}">Register</a>
                @endif
                @endif
                <hr>
                <a href="#one" class="btn btn-warning btn-xl page-scroll">Más información</a>
            </div>
        </div>
        @endif
    </header>
    <section class="bg-primary" id="one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-0">Software Educativo 4.0</h2>
                    <br>
                    <p class="text-faded">
                        Nuestra meta principal es que cualquier persona que quiera aprender, pueda. Para eso hemos diseñado este software de gestión educativa pionero en el mercado español.
                    </p>
                    <p class="text-faded">
                        Ya no te hace falta buscar programas de gestión educativa, te ofrecemos una solución all-in-one.
                    </p>
                </div>
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <img src="images/girl-laptop.png" width="500" height="400" alt="" style="border-radius:10px;">
                </div>
            </div>
        </div>
    </section>
    <section id="two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="margin-top-0 text-primary">¿Qué ofrece este programa?</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        </svg>
                        <h3>Gestión de personal</h3>
                        <p class="text-muted">Permite gestionar estudiantes, profesores y administradores</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-book-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8.5 2.687v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                        </svg>
                        <h3>Gestión escolar</h3>
                        <p class="text-muted">Permite crear asignaturas, cursos, horarios, trabajos y exámenes. Permite además añadir notas a cada alumno.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <svg width="10em" height="10em" viewBox="0 0 16 16" class="bi bi-cloud-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                            <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        </svg>
                        <h3>Todo al día</h3>
                        <p class="text-muted">Gracias a nuestra solución en la nube los estudiantes pueden ver en su calendario online sus cursos y en su expediente sus notas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div>
                    <h4>Creado por</h4>
                    <p>Moisés Gomez, Francesc Arellano y Cristian Viaplana</p>
                </div>

            </div>
        </div>
    </footer>
    </div>
    <!--scripts loaded here from cdn for performance -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
</body>

</html>