<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    @include('cabecera')
</head>
<body class="uk-background-muted">
    @include('navbar.navbar')
    <div class="uk-flex uk-flex-center uk-margin-large">
        <div class="uk-card uk-card-default uk-card-body uk-width-4-5">
                <ul class="uk-text-bold" uk-tab>
                    <li><a href="#">Bloques</a></li>
                    <li><a href="#">configuración general</a></li>
                    <li><a href="#">Perfiles</a></li>
                </ul>

                <div class="uk-switcher uk-margin">
                    <div>@include('bloques.inicio')</div>
                    <div>@include('admin.configuracion')</div>
                    <div>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</div>
                </div>
        </div>
    </div>
    @include('notificaciones')
    @include('piePagina.piePagina')
</body>
</html>