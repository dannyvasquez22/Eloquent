<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        Consultas Eloquent
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="{{ route('all') }}"> Todos los usuarios (ALL) </a>
        </li>
        <li>
            <a href="{{ route('get', 'F') }}"> Lista de usuarios (Femenina) (GET) </a>
        </li>
        <li>
            <a href="{{ route('get', 'M') }}"> Lista de usuarios (Masculina) (GET) </a>
        </li>
        <li>
            <a href="{{ route('get-custom') }}"> Lista de usuarios (GET-ARRAY) </a>
        </li>
        <li>
            <a href="{{ route('lists') }}"> Lista de usuarios para Select (LISTS) </a>
        </li>
        <li>
            <a href="{{ route('first-last') }}"> Lista de usuarios FIRST - LAST </a>
        </li>
        <li>
            <a href="{{ route('paginate') }}"> Lista de usuarios PAGINATE </a>
        </li>
    </ul>
</li>