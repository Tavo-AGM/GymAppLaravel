<div class="uk-flex uk-flex-center">    
    <div class="uk-animation-toggle" tabindex="0">
        <div class="uk-animation-shake">
            <h1 class="uk-heading-large"> {{$gimnasio->nombre}} </h1>
            <p class="uk-text-bold">
               <span class="uk-label">@Gimnasio de barrio</span> 
                tu mejor opción para administrar tu Gimnasio.</p>
        </div>
    </div>
</div>  
<div class="uk-padding-large">
    <p>Haz clic en tu perfil e inicia:</p>
    @include('inicio.tarjetas')
</div>    