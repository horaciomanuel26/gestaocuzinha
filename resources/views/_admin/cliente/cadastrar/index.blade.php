<div class="modal-content">
    <div class="modal-header bg-success">
        <!--Título-->
        <h5 class="modal-title " id="exampleModalLabel">Cadastrar Cliente</h5>
        <!--Fim Título-->
        <button class="close" type="button" data-dismiss="modal"
            aria-label="Close">
            <span aria-hidden="true" class="color-white">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form id="formCadastrar" method="POST" action="{{ route('cliente.cadastrar')}}">
            @csrf
            {{$cliente=null}}
            @include('form.cliente.index')
        </form>
    </div>
    <div class="modal-footer">
        <button type="reset" class="btn btn-secondary"
            data-dismiss="modal">Cancelar</button>
        <button type="submit" form="formCadastrar"
            class="btn btn-success">Cadastrar</button>
    </div>
</div>
