@extends('layout')
@section('content')
<div class="container-fluid">
    <!-- Título da View -->
    <h1 class="h3 mb-2 text-gray-800">Postos</h1>
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
                        @foreach ($postos as $posto)
                        <tr>
                            <td>{{ $posto->id }}</td>
                            <td>{{ $posto->vc_nome }}</td>
                            <td>{{ $posto->vc_telefone }}</td>
                            <td>{{ $posto->vc_email }}</td>
                            <td>{{ $posto->vc_nif }}</td>
                            <td>
                                <a href="{{ route('posto.deletar', $posto->id) }}" class="btn1 bg-vermelho">Deletar</a>
                                
                                <button type="button" class="btn1 bg-verde" data-toggle="modal"
                                    data-target="#formEditarModal{{ $posto->id }}" id="formEditarModal{{ $posto->id }}">Editar</button>
                            </td>
                        </tr>
                        
                        <!-- Modal de Edição para cada posto -->
                        <div class="modal fade" id="formEditarModal{{ $posto->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                @include('_admin.posto.editar.index', ['posto' => $posto])
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
            @include('_admin.posto.cadastrar.index')
        </div>
    </div>
    <!-- Fim Modal de Cadastro -->
</div>

{{--cadastrar alert --}}
@if(session('success.posto'))
    <script>
        Swal.fire({
        title: 'posto',
        text: 'posto cadastrado com sucesso',
        icon: 'success',
        confirmButtonText: 'confirmado'
      })
    </script>
@endif
@if(session('erro.posto.success'))
    <script>
        Swal.fire({
        title: 'posto',
        text: 'posto cadastrado com sucesso',
        icon: 'erro',
        confirmButtonText: 'confirmado'
      })
    </script>
@endif
{{--editar alert --}}
{{--eliminar alert --}}
@if(session('success.posto.eliminar'))
    <script>
        Swal.fire({
        title: 'posto',
        text: 'posto eliminado com sucesso',
        icon: 'success',
        confirmButtonText: 'confirmado'
      })
    </script>
@endif
@if(session('erro.posto.eliminar'))
    <script>
        Swal.fire({
        title: 'posto',
        text: 'Erro ao eliminar posto',
        icon: 'erro',
        confirmButtonText: 'confirmado'
      })
    </script>
@endif

@endsection
