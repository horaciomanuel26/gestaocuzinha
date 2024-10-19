<div class="modal-content">
    <div class="modal-header bg-success">
        <!--Título-->
        <h5 class="modal-title " id="exampleModalLabel">Editar de Posto</h5>
        <!--Fim Título-->
        <button class="close" type="button" data-dismiss="modal"
            aria-label="Close">
            <span aria-hidden="true" class="color-white">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form id="formEditar{{$posto->id}}" method="POST" action="{{ route('posto.editar',$id=$posto->id) }}">
            @csrf
            @method('PUT')
            @include('form.posto.index')
        </form>
    </div>
    <div class="modal-footer">
        <button type="reset" class="btn btn-secondary"
            data-dismiss="modal">Cancelar</button>
        <button type="submit" form="formEditar{{ $posto->id}}"
            class="btn btn-success">Atualizar</button>
    </div>
</div>
@if(session('erro.posto.editar'))
    <script>
        Swal.fire({
        title: 'posto',
        text: 'posto Atualizado com sucesso',
        icon: 'success',
        confirmButtonText: 'confirmado'
      })
    </script>
@endif
@if(session('erro.posto.editar'))
    <script>
        Swal.fire({
        title: 'posto',
        text: 'posto cadastrado com sucesso',
        icon: 'erro',
        confirmButtonText: 'confirmado'
      })
    </script>
@endif