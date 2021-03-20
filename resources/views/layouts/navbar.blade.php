<header class="market-header header">
    <div class="container-fluid">
        <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Главная</a>
                    </li>
                    @if(auth()->check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Выйти</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login.create') }}">Вход</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register.create') }}">Регистрация</a>
                    </li>
                    @endif
                </ul>

                <style>
                    .market-header .form-inline .form-control.is-invalid{
                        border: 2px solid red;
                    }
                </style>
            </div>
        </nav>
    </div>
</header>
