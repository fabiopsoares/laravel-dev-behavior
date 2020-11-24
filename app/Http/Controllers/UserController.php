<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "<h1>Listagem de usuário com o código 1</h1>";
    }

    public function getData()
    {
        return "<h1>Disparou ação get</h1>";
    }

    public function postData(Request $request)
    {

        dd($request);
        return "<h1>Disparou ação post</h1>";
    }
}
