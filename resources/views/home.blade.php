  @extends('layouts.app')
  @section('content')

    @include('menu.app')

    @can('canAdminSubjectTeacher')
    <div style="padding-top:100px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-0">Panel de Control</h2>
                    <br>
                    <p>
                        Gestiona toda la aplicación desde esta vista.
                    </p>
                    <p>
                        Puedes usar el submenú de arriba para utilizar todas las herramientas que te proporcionamos.
                    </p>
                </div>
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <img src="images/software.png" alt="" style="border-radius:10px;">
                </div>
            </div>
        </div>
        @endcan

        @can('canAccessCalendar')
    <div style="padding-top:100px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-0">Aplicación Escolar</h2>
                    <br>
                    <p>
                        Gestiona todos tus trabajos, exámenes, perfil y calendario desde aquí
                    </p>
                    <p>
                        Puedes usar el submenú de arriba para utilizar todas las herramientas que te proporcionamos.
                    </p>
                </div>
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <img src="images/girl-laptop.png" width="400" height="300" alt="" style="border-radius:10px;">
                </div>
            </div>
        </div>
        @endcan

  @endsection