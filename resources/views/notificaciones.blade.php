    <!-- Modal de Error -->
    <div id="modal-error" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <button class="uk-modal-close-default uk-text-danger uk-text-bold" type="button" uk-close></button>
            <h2 class="uk-modal-title uk-text-bold uk-text-danger uk-text-center">Error</h2>
            <div class="uk-child-width-expand@s uk-text-center" uk-grid>
                <div></div>
                <div>
                    <a class="uk-text-danger" uk-icon="icon: close-circle; ratio: 6"></a>
                </div>
                <div></div>
            </div>
            <h3 class="uk-text-danger uk-text-center"><p>{{ session('error') }}</p></h3>
            </div>
        </div>
    </div>
    @if(session('error'))
        <script>
            UIkit.modal('#modal-error').show();
        </script>
    @endif

        <!-- Modal de Error -->
    <div id="modal-exito" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <button class="uk-modal-close-default uk-text-success uk-text-bold" type="button" uk-close></button>
            <h2 class="uk-modal-title uk-text-bold uk-text-success uk-text-center">Exito</h2>
            <div class="uk-child-width-expand@s uk-text-center" uk-grid>
                <div></div>
                <div>
                    <a class="uk-text-success" uk-icon="icon: check; ratio: 6"></a>
                </div>
                <div></div>
            </div>
            <h3 class="uk-text-success uk-text-center"><p>{{ session('exito') }}</p></h3>
            </div>
        </div>
    </div>
    @if(session('exito'))
        <script>
            UIkit.modal('#modal-exito').show();
        </script>
    @endif