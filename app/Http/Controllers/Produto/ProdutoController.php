<?php

namespace App\Http\Controllers\Produto;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\Produto\ProdutoFormRequest;

use App\Models\Produto;

class ProdutoController extends Controller
{
    const title = 'Produto';

    protected $produto;

    public function __construct(Produto $_model)
    {
        $this->produto = $_model;
    }

    public function index()
    {
        $title = self::title;

        $produtos = $this->produto->all();

        return View('produto.index', compact('title', 'produtos'));
    }

    public function create()
    {
        $title = self::title . ' - Cadastro';
        $categorias = ['alimentos', 'eletronicos', 'limpeza', 'moveis'];

        return View('produto.create_edit', compact('title', 'categorias'));
    }

    public function store(ProdutoFormRequest $request)
    {
        //Pega todos dados do Form
        $dataForm = $request->all();

        $dataForm['ativo'] = !isset($dataForm['ativo']) ? 0 : 1;

        $insert = $this->produto->create($dataForm);

        if ($insert) {
            return redirect()->route('produto.index');
        } else {
            return redirect()->back();
        }
    }

    public function show($id)
    {
        $title = self::title . ' - Detalhes';
        $produto = $this->produto->find($id);
        $title .= " -  $produto->nome";

        return View('produto.show', compact('title', 'produto'));
    }

    public function edit($id)
    {
        $title = self::title . ' - Editar';
        $categorias = ['alimentos', 'eletronicos', 'limpeza', 'moveis'];

        $produto = $this->produto->find($id);
        $title .= " -  $produto->nome";

        return View('produto.create_edit', compact('title', 'categorias', 'produto'));
    }

    public function update(ProdutoFormRequest $request, $id)
    {
        $produto = $this->produto->find($id);

        //Pega todos dados do Form
        $dataForm = $request->all();

        $dataForm['ativo'] = !isset($dataForm['ativo']) ? 0 : 1;

        $update = $produto->update($dataForm);

        if ($update) {
            return redirect()->route('produto.index');
        } else {
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        $title = self::title . ' - Excluir';
        $produto = $this->produto->find($id);
        $title .= " - $produto->nome";

        $delete = $produto->delete();

        if ($delete) {
            return redirect()->route('produto.index');

        } else {
            return redirect()->back();
        }
    }
}
