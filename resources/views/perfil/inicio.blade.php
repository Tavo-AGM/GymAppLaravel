<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
      @include('cabecera')
</head>
<body class="uk-background-muted">
        @include('navbar.navbar')
    <div class="uk-container uk-flex uk-flex-center uk-padding-large uk-text-center">
    
    <div class="uk-card uk-card-default uk-card-body uk-card-large uk-width-2-4">
    <h3 class="uk-card-title">Edita tu perfil</h3><hr>
    <div class="uk-column-1-2 uk-column-divider">
        <div>
            <img class="uk-border-circle uk-box-shadow-xlarge uk-box-shadow-hover-medium" src="{{session('usuario.avatar')}}" width="200">
            <br><br><label for="" class="uk-text-bold">{{session('usuario.name')}} </label>
            <br><button class="uk-button uk-button-secondary uk-button-large uk-margin" type="button" uk-toggle="target: #modal-avatar">Cambiar Avatar</button><br><br>
        </div>
        <div>
    <form action="{{route('cambiar.informacion')}}" method="post">
                @csrf
            <div class="uk-margin uk-text-left">
                <label class="uk-form-label uk-text-large" for="form-stacked-text">Nombre de usuario:</label>
                <div class="uk-form-controls">
                    <input name="inputName" class="uk-input" id="form-stacked-text" type="text" value="{{session('usuario.name')}}" required>
                </div>
            </div>
             <div class="uk-margin uk-text-left">
                <label class="uk-form-label uk-text-large" for="form-stacked-text">Correo:</label>
                <div class="uk-form-controls">
                    <input name="inputEmail" class="uk-input" id="form-stacked-text" type="text" value="{{session('usuario.email')}}" required>
                </div>
            </div>
             <div class="uk-margin uk-text-left">
                <label class="uk-form-label uk-text-large" for="form-stacked-text">Teléfono:</label>
                <div class="uk-form-controls">
                    <input name="inputTelefono" class="uk-input" id="form-stacked-text" type="text" value="{{session('usuario.telefono')}}" required>
                </div>
            </div>
        </div>
        <button class="uk-button uk-button-primary uk-button-large uk-margin">Guardar</button>
    </form>
    </div>               
    </div>

        @include('perfil.avatar')
        @include('notificaciones')
    </div>
        @include('piePagina.piePagina')
</body>
</html>
