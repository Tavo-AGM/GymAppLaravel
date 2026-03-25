<ul class="uk-subnav uk-subnav-pill" uk-switcher>
    <li><a href="#">Gimnasio</a></li>
    <li><a href="#">Seguridad</a></li>
    <li><a href="#">Dispositivos</a></li>
</ul>

<div class="uk-switcher uk-margin uk-width-expand">
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <form action="{{route('cambiar.gimnasio')}}" method="post">
        @csrf
            <div class="uk-margin uk-text-left">
                <label class="uk-form-label uk-text-default" for="form-stacked-text">Nombre del Gimnasio:</label>
                <div class="uk-form-controls">
                    <input name="inputNombreGimnasio" class="uk-input" id="form-stacked-text" type="text" value="{{$gimnasio->nombre}}" required>
                </div>
            </div>
            <div class="uk-margin uk-text-left">
                <label class="uk-form-label uk-text-default" for="form-stacked-text">Ubicación del Gimnasio:</label>
                <div class="uk-form-controls">
                    <input name="inputUbicacionGimnasio" class="uk-input" id="form-stacked-text" type="text" value="{{$gimnasio->ubicacion}}" required>
                </div>
            </div>
            <div class="uk-margin uk-text-left">
                <label class="uk-form-label uk-text-default" for="form-stacked-text">Teléfono del Gimnasio:</label>
                <div class="uk-form-controls">
                    <input name="inputTelefonoGimnasio" class="uk-input" id="form-stacked-text" type="text" value="{{$gimnasio->telefono}}" required>
                </div>
            </div>
        <button type="submit" class="uk-button uk-button-primary uk-button-large uk-margin">Guardar</button>
        </form>
        </div>
    </div>
    
    <div>Hello!</div>

    <div>Bazinga!</div>
</div>