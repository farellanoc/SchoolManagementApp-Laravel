<div class="submenu-options">
    @can('canAccessCalendar')
        <div class="item-option margin-right-15 cursor-pointer">
                <a href="{{route('calendar.index')}}">Calendario</a>
        </div>
    @endcan
    @can('canAdminSubjects')
        <div class="item-option margin-right-15 cursor-pointer">
            <a href="{{route('subject.index')}}">Asignaturas</a>
        </div>
    @endcan
    @can('canAdminUsers')
        <div class="item-option margin-right-15 cursor-pointer">
            <a href="{{route('user.index')}}">Usuarios</a>
        </div>
    @endcan
    @can('canAdminEnrollments')
        <div class="item-option margin-right-15 cursor-pointer">
            <a href="{{route('enrollment.index')}}">Matrículas</a>
        </div>
    @endcan
    @can('canShowCourses')
        <div class="item-option margin-right-15 cursor-pointer">
            <a href="{{route('course.index')}}">Cursos</a>
        </div>
    @endcan
    @can('canAdminExam')
        <div class="item-option margin-right-15 cursor-pointer">
            <a href="{{route('exam.index')}}">Exámenes</a>
        </div>
    @endcan
    @can('canAdminWork')
        <div class="item-option margin-right-15 cursor-pointer">
            <a href="{{route('work.index')}}">Trabajos</a>
        </div>
    @endcan
</div>