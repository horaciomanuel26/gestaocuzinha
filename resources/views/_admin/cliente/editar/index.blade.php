<div class="modal-content">
    <div class="modal-header bg-success">
        <!--Título-->
        <h5 class="modal-title " id="exampleModalLabel">Editar de Cliente</h5>
        <!--Fim Título-->
        <button class="close" type="button" data-dismiss="modal"
            aria-label="Close">
            <span aria-hidden="true" class="color-white">×</span>
        </button>
    </div>
    <div class="modal-body">
        <form id="formEditar{{$cliente->id}}" method="POST" action="{{ route('cliente.editar',$id=$cliente->id) }}">
            @csrf
            @method('PUT')
            @include('form.cliente.index')
        </form>
    </div>
    <div class="modal-footer">
        <button type="reset" class="btn btn-secondary"
            data-dismiss="modal">Cancelar</button>
        <button type="submit" form="formEditar{{ $cliente->id}}"
            class="btn btn-success">Atualizar</button>
    </div>
</div>
@if(session('erro.cliente.editar'))
    <script>
        Swal.fire({
        title: 'Cliente',
        text: 'cliente Atualizado com sucesso',
        icon: 'success',
        confirmButtonText: 'confirmado'
      })
    </script>
@endif
@if(session('erro.cliente.editar'))
    <script>
        Swal.fire({
        title: 'Cliente',
        text: 'cliente cadastrado com sucesso',
        icon: 'erro',
        confirmButtonText: 'confirmado'
      })
    </script>
@endif