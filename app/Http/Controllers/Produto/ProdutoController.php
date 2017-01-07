<?php

namespace App\Http\Controllers\Produto;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    public function index()
    {
        return View('produto.index');
    }

    public function create()
    {
        return View('produto.create_edit');
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
