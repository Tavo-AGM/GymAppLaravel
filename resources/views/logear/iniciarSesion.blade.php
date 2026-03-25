<div id="modal-entrar" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-text-center">
           <img id="modal-entrar-avatar" class="uk-border-circle" width="130" height="100" src="{{$u->avatar}}" alt="Avatar">
            <br><span class="uk-text-default uk-text-bold">{{$u->name}}</span>
            <br><span class="uk-text-small">{{$u->rol}}</span>
            <form action="{{route('iniciarSesion')}}" method="post">
                @csrf
                <input id="idUsuario" name="idUsuario" class="uk-invisible" type="text" value="{{$u->id}}">
                <div class="uk-margin">
                    <div class="uk-inline">
                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                        <input id="passwordUsuario" name="passwordUsuario" class="uk-input" type="password" aria-label="Not clickable icon" autofocus required>
                    </div>
                </div>
                <button type="submit" class="uk-button uk-button-secondary uk-button-large">Iniciar sesión</button>
            </form>

    </div>
</div>