<?php

namespace App\Http\Controllers;
use App\Models\Agendamentos;
use Illuminate\Http\Request;

class AgendamentosController extends Controller
{
    public function store(Request $request){

     // Enviando os dados para o banco de dados
     $agendamento = new Agendamentos();
     $agendamento->nome = $request->nome;
     $agendamento->telefone = $request->telefone;
     $agendamento->origem = $request->origem;
     $agendamento->data_contato = $request->contato;
     $agendamento->observacao = $request->observacao;
     $agendamento->save();

     // Retornando para o formulário de cadastro
     return redirect()->route('index')
         ->width('success', 'Agendamento criado com sucesso!');

}

    // Método get para mostrar os dados na tabela
    public function show(){

        //Recupers todos os agendamentos do banco de dados
        $tableagenda = Agendamentos::all();

        // Retorna a view 'consultar' com os agendamentos recuperados
        return view('consulta', ['agendamentos' => $tableagenda]); 
    }

}
?>