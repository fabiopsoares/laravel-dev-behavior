<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

    public function testePut(Request $request)
    {

        dd($request);
        return "<h1>Usuário da request é 1 put</h1>";
    }

    public function testePatch(Request $request)
    {

        var_dump($request);
        return "<h1>Usuário da request é 1 patch</h1>";
    }

    public function testeMatch(Request $request)
    {

        var_dump($request);
        return "<h1>Usuário da request é 2 PUT/PATCH</h1>";
    }

    public function destroy()
    {
        return "<h1>Disparou ação destroy usuário 1</h1>";
    }

    public function any()
    {
        return "<h1>Qualquer verbalização é aceita</h1>";
    }

    public function userComments(Request $request, $id, $comment=null)
    {
        echo 'Estou aqui';
        var_dump($id,$comment,$request);
    }

    public function inspect(){

        $route = Route::current();
        $name = Route::currentRouteName();
        $action = Route::currentRouteAction();

        var_dump($route,$name,$action);
    }
}
