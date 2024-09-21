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
    <div class="row">
        <div class="col-6">
            <label for="vc_telefone">Telefone</label>
            <input type="text" class="form-control" id="vc_telefone" name="vc_telefone" value="{{ isset($cliente) ? $cliente->vc_telefone : old('vc_telefone') }}" required>                    
        </div>
        <div class="col-6">
            <label for="vc_nif">NIF</label>
            <input type="text" class="form-control" id="vc_nif" name="vc_nif" value="{{ isset($cliente) ? $cliente->vc_nif : old('vc_nif') }}" required>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="it_valor_mensal">Valor Mensal</label>
    <input type="number" class="form-control" id="it_valor_mensal" name="it_valor_mensal" value="{{ isset($cliente) ? $cliente->it_valor_mensal : old('it_valor_mensal') }}" required>
</div>