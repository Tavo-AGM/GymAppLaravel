<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> {{$gimnasio->nombre}} </title>
      @include('cabecera')
    </head>
    <body class="uk-background-muted">
        <div class="uk-container-expand uk-padding-large uk-align-center">
            @include('inicio.inicio')
            @include('notificaciones')
        </div>
        
        @include('piePagina.piePagina')
    </body>
</html>
