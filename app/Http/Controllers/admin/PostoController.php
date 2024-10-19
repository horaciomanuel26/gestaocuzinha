<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Posto;

class PostoController extends Controller
{
    // Lista todos os postos
    public function index()
    {
        $dados['postos'] = Posto::all();
        $dados['clientes'] = Cliente::all();
        return view('_admin.posto.index', $dados);
    }

    // Cadastra um novo posto
    public function cadastrar(Request $request)
{
    if($request){
            // Validação dos dados do posto
        $request->validate([
            'vc_nome' => 'required',
            'vc_telefone' => 'required',
            'vc_email' => 'required',
            'vc_endereco' => 'required',
            'it_id_cliete' => 'required',
        ]);

        // Cria um novo posto com os dados validados
        posto::create([
            'vc_nome' => $request->vc_nome,
            'vc_telefone' => $request->vc_telefone,
            'vc_email' => $request->vc_email,
            'vc_endereco' => $request->vc_endereco,
            'it_id_cliete' => $request->it_id_cliete,
        ]);

        return redirect()->route('posto.index')->with('success.posto','cadsatro sucesso');
    }else{
        return redirect()->route('posto.index')->with('erro.posto','erro cadstro');
    }
        
}

    // Exibe o formulário de edição e os dados do posto para o id fornecido
    public function editar(Request $request, $id)
{
    if($id){
            // Validação do id
        $request->validate([
            'vc_nome' => 'required',
            'vc_telefone' => 'required',
            'vc_email' => 'required',
            'vc_endereco' => 'required',
            'it_id_cliete' => 'required',
        ]);

        // Obtém o posto com base no id
        $posto = posto::findOrFail($id);
        
        $posto->update([
            'vc_nome' => $request->vc_nome,
            'vc_telefone' => $request->vc_telefone,
            'vc_email' => $request->vc_email,
            'vc_endereco' => $request->vc_endereco,
            'it_id_cliete' => $request->it_id_cliete,
        ]);

        return redirect()->route('posto.index')->with('success.posto.editar','editar sucesso');
    }else{
        return redirect()->route('posto.index')->with('erro.posto.editar','erro editar');
    }
}

    // Deleta o posto com o id fornecido
    public function deletar($id)
    {
        //dd($id);
        if($id){
            $posto = posto::findOrFail($id);
            $posto->delete();

            return redirect()->route('posto.index')->with('success.posto.eliminar', 'posto deletado com sucesso!');
        }else{
            return redirect()->route('posto.index')->with('erro.posto.eliminar', 'erro ao deletar posto!');            
        }
        // Encontra e deleta o posto
    }
}
