<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoRequest;
use App\Models\Servico;

class ServicoController extends Controller {
    
    /**
     * Lista os serviços
     *
     * @return View
     */
    public function index() {
        $servicos = Servico::paginate(10);

        return view('servicos.index')->with('servicos', $servicos);
    }

    /**
     * Formulário de Criação
     *
     * @return View
     */
    public function create() {
        return view('servicos.create');
    }

    /**
     * Cria o registro
     *
     * @param ServicoRequest $request
     * @return void
     */
    public function store(ServicoRequest $request) {
        $dados = $request->except('_token');

        Servico::create($dados);

        return redirect()->route('servicos.index')->with('mensagem', 'Serviço criado com sucesso!');
    }

    /**
     * Formulário de Edição
     *
     * @param integer $id
     * @return View
     */
    public function edit(int $id) {
        $servico = Servico::findOrFail($id);

        return view('servicos.edit')->with('servico', $servico);
    }

    /**
     * Atualização do registros
     *
     * @param integer $id
     * @param ServicoRequest $request
     * @return void
     */
    public function update(int $id, ServicoRequest $request) {
        $dados = $request->except(['_token', '_method']);

        $servico = Servico::findOrFail($id);

        $servico->update($dados);

        return redirect()->route('servicos.index')->with('mensagem', 'Serviço atualizado com sucesso!');
    }
}
