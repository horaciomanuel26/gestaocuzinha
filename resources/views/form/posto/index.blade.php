<!-- Campos do Formulário -->
<div class="form-group">
    <label for="vc_nome">Nome</label>
    <input type="text" class="form-control" id="vc_nome" name="vc_nome" value="{{ isset($cliente) ? $cliente->vc_nome : old('vc_nome') }}" required>
</div>

<div class="form-group">
    <label for="vc_email">Email</label>
    <input type="email" class="form-control" id="vc_email" name="vc_email" value="{{ isset($cliente) ? $cliente->vc_email : old('vc_email') }}" required>
</div>

<div class="form-group">
    <label for="vc_endereco">Endereço</label>
    <input type="text" class="form-control" id="vc_endereco" name="vc_endereco" value="{{ isset($cliente) ? $cliente->vc_endereco : old('vc_endereco') }}" required>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-6">
            <label for="vc_telefone">Telefone</label>
            <input type="text" class="form-control" id="vc_telefone" name="vc_telefone" value="{{ isset($cliente) ? $cliente->vc_telefone : old('vc_telefone') }}" required>
        </div>
    </div>
</div>

<!-- Campo para selecionar o Cliente (ID do cliente) -->
<div class="form-group">
    <label for="it_id_cliente">Cliente</label>
    <select class="form-control" id="it_id_cliente" name="it_id_cliente" required>
        <option value="">Selecione um Cliente</option>
        @foreach ($clientes as $clienteOption)
            <option value="{{ $clienteOption->id }}" {{ isset($cliente) && $cliente->it_id_cliente == $clienteOption->id ? 'selected' : '' }}>
                {{ $clienteOption->vc_nome }}
            </option>
        @endforeach
    </select>
</div>
