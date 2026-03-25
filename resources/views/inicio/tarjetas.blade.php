
    <ul class="uk-grid-small uk-child-width-1-2 uk-child-width-1-4@s" uk-sortable="handle: .uk-card" uk-grid>
        @foreach ($users as $u)
        <li>
            <div class="uk-card uk-card-default uk-card-hover uk-text-center">
                <div class="uk-card-body">
                    <img class="uk-border-circle" width="100" height="100" src="{{$u->avatar}}" alt="Avatar">
                    <br><span class="uk-text-default uk-text-bold"> {{$u->name}} </span>
                    <br><span class="uk-text-small"> {{$u->rol}} </span>
                </div>
                <div class="uk-card-footer uk-button-secondary" type="button" uk-toggle="target: #modal-entrar" id="btn-modal-entrar" data-user={{$u}}>
                    <span class="">Entrar  <a uk-icon="sign-in"></a></span>
                </div>
            </div>
        </li>
        @endforeach
    </ul>

    @include('logear.iniciarSesion')
