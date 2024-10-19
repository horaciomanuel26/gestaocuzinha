<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    // Lista todos os clientes
    public function index()
    {
        $dados['clientes'] = Cliente::all();
        return view('_admin.cliente.index', $dados);
    }

    // Cadastra um novo cliente
    public function cadastrar(Request $request)
{
    if($request){
            // Validação dos dados do cliente
        $request->validate([
            'vc_nome' => 'required',
            'vc_telefone' => 'required',
            'vc_email' => 'required',
            'vc_nif' => 'required',
            'it_valor_mensal' => 'required',
        ]);

        // Cria um novo cliente com os dados validados
        Cliente::create([
            'vc_nome' => $request->vc_nome,
            'vc_telefone' => $request->vc_telefone,
            'vc_email' => $request->vc_email,
            'vc_nif' => $request->vc_nif,
            'it_valor_mensal' => $request->it_valor_mensal,
        ]);

        return redirect()->route('cliente.index')->with('success.cliente','cadsatro sucesso');
    }else{
        return redirect()->route('cliente.index')->with('erro.cliente','erro cadstro');
    }
        
}

    // Exibe o formulário de edição e os dados do cliente para o id fornecido
    public function editar(Request $request, $id)
{
    if($id){
            // Validação do id
        $request->validate([
            'vc_nome' => 'required',
            'vc_telefone' => 'required',
            'vc_email' => 'required',
            'vc_nif' => 'required',
            'it_valor_mensal' => 'required',
        ]);

        // Obtém o cliente com base no id
        $cliente = Cliente::findOrFail($id);
        
        $cliente->update([
            'vc_nome' => $request->vc_nome,
            'vc_telefone' => $request->vc_telefone,
            'vc_email' => $request->vc_email,
            'vc_nif' => $request->vc_nif,
            'it_valor_mensal' => $request->it_valor_mensal,
        ]);

        return redirect()->route('cliente.index')->with('success.cliente.editar','editar sucesso');
    }else{
        return redirect()->route('cliente.index')->with('erro.cliente.editar','erro editar');
    }
}

    // Deleta o cliente com o id fornecido
    public function deletar($id)
    {
        //dd($id);
        if($id){
            $cliente = Cliente::findOrFail($id);
            $cliente->delete();

            return redirect()->route('cliente.index')->with('success.cliente.eliminar', 'Cliente deletado com sucesso!');
        }else{
            return redirect()->route('cliente.index')->with('erro.cliente.eliminar', 'erro ao deletar Cliente!');            
        }
        // Encontra e deleta o cliente
    }
}
