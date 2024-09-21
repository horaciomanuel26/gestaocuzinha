@extends('layout')
@section('content')
<div class="container-fluid">
    <!-- Título da View -->
    <h1 class="h3 mb-2 text-gray-800">Clientes</h1>
    <!-- Fim Título da View -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- Cadastrar -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#formCadastrarModal">
                Adicionar +
            </button>
            <!-- Fim Cadastrar -->
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered tabela_texto_cor" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th>NIF</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->vc_nome }}</td>
                            <td>{{ $cliente->vc_telefone }}</td>
                            <td>{{ $cliente->vc_email }}</td>
                            <td>{{ $cliente->vc_nif }}</td>
                            <td>
                                <a href="{{ route('cliente.deletar', $cliente->id) }}" class="btn btn-danger p-1 no-hover">Deletar</a>
                                
                                <button type="button" class="btn btn-primary p-1 no-hover" data-toggle="modal"
                                    data-target="#formEditarModal{{ $cliente->id }}" id="formEditarModal{{ $cliente->id }}">Editar</button>
                            </td>
                        </tr>
                        
                        <!-- Modal de Edição para cada cliente -->
                        <div class="modal fade" id="formEditarModal{{ $cliente->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                @include('_admin.cliente.editar.index', ['cliente' => $cliente])
                            </div>
                        </div>
                        <!-- Fim Modal de Edição -->
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal de Cadastro -->
    <div class="modal fade" id="formCadastrarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            @include('_admin.cliente.cadastrar.index')
        </div>
    </div>
    <!-- Fim Modal de Cadastro -->
</div>

{{--cadastrar alert --}}
@if(session('success.cliente'))
    <script>
        Swal.fire({
        title: 'Cliente',
        text: 'cliente cadastrado com sucesso',
        icon: 'success',
        confirmButtonText: 'confirmado'
      })
    </script>
@endif
@if(session('erro.cliente.success'))
    <script>
        Swal.fire({
        title: 'Cliente',
        text: 'cliente cadastrado com sucesso',
        icon: 'erro',
        confirmButtonText: 'confirmado'
      })
    </script>
@endif
{{--editar alert --}}
{{--eliminar alert --}}
@if(session('success.cliente.eliminar'))
    <script>
        Swal.fire({
        title: 'Cliente',
        text: 'cliente eliminado com sucesso',
        icon: 'success',
        confirmButtonText: 'confirmado'
      })
    </script>
@endif
@if(session('erro.cliente.eliminar'))
    <script>
        Swal.fire({
        title: 'Cliente',
        text: 'Erro ao eliminar cliente',
        icon: 'erro',
        confirmButtonText: 'confirmado'
      })
    </script>
@endif

@endsection
