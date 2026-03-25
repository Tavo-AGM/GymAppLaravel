
<nav class="uk-navbar-container uk-text-bold">
        <div class="uk-background-secondary uk-light uk-padding uk-padding-remove-top uk-padding-remove-bottom" uk-navbar>
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav ">
                    <li class="uk-active"><a href="{{route('admin.inicio')}}"> {{$gimnasio->nombre}} </a></li>
                </ul>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li>
                        <a>
                            <img class="uk-border-circle" width="50" height="50" src="{{session('usuario.avatar')}}" alt="Avatar">
                        </a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="{{route('perfil.inicio')}}"><span uk-icon="icon: user"></span> Perfil</a></li>
                                <li><a href="#"><span uk-icon="icon: question"></span>Ayuda</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="{{route('cerrarSesion')}}"><span uk-icon="icon: sign-out"></span>Cerrar sesión</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
</nav>
