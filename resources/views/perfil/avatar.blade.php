<!-- This is the modal -->
<div id="modal-avatar" class="uk-modal-container" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-text-center">
        <h2 class="uk-modal-title">{{session('usuario.name')}} elige un avatar</h2>
        <img id="avatar" src="{{session('usuario.avatar')}}" width="180"> 
        <hr>
        @for ($i = 1; $i <= 45; $i++)
            <img src={{"https://robohash.org/".$i}} class="uk-card-hover opcion" width="120" height="120" data-url={{"https://robohash.org/".$i}} />
        @endfor
            <form action="{{route('cambiar.avatar')}}" method="post">
                @csrf
                    <input class="uk-invisible" type="text" id="inputAvatar" name="inputAvatar">
                    <p class="uk-text-right">
                        <button class="uk-button uk-button-default uk-modal-close" type="button">Cancelar</button>
                        <button type="submit" class="uk-button uk-button-primary" type="button">Guardar</button>
                    </p>
            </form>
    </div>
</div>

<script>
document.querySelectorAll('.opcion').forEach(div => {
    div.addEventListener('click', function() {
        // Obtenemos el dataset del div
        let valor = this.dataset.url;

        // Insertamos el valor en el input
        document.getElementById('inputAvatar').value = valor;

        // Cambiamos el src de la imagen
        document.getElementById('avatar').src = valor;
    });
}); 
</script>
