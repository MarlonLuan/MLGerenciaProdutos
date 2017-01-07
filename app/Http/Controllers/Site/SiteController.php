<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return View('site.home.index');
    }

    public function contato()
    {
        return View('site.home.contato');
    }

    public function sobre()
    {
        return View('site.home.sobre');
    }

    public function welcome($nome = 'nome')
    {
        return View('site.home.welcome', compact('nome'));
    }
}
