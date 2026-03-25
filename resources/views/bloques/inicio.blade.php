    <div class="uk-margin-top">
        <div uk-grid>
            <div class="uk-width-auto@m">
                <ul class="uk-tab-left uk-text-bold" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                    <hr>
                    @foreach ($bloques as $b)
                    <li><a><span uk-icon="icon: {{$b->icono}}"></span> {{$b->nombre}} </a></li>
                    <hr>
                    @endforeach
                </ul>
            </div>
            <div class="uk-width-expand@m">
                <div id="component-tab-left" class="uk-switcher">
                    <div>@include('bloques.entrada')</div>
                    <div>@include('bloques.tienda')</div>
                    <div>@include('bloques.inventario')</div>
                    <div>@include('bloques.socios')</div>
                    <div>@include('bloques.historial')</div>
                    <div>@include('bloques.reportes')</div>
                    <div>@include('bloques.membresias')</div>
                </div>
            </div>
        </div>
    </div>