<?php

namespace App\Http\Controllers\Produto;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

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

    public function store(Request $request)
    {
        return View('produto.index');
    }

    public function show($id)
    {
        return View('produto.show');
    }

    public function edit($id)
    {
        return View('produto.create_edit');
    }

    public function update(Request $request, $id)
    {
        return View('produto.index');
    }

    public function destroy($id)
    {
        return View('produto.index');
    }
}
