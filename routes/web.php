<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//sobreescrevendo nome da rota resource
/*
Route::resourceVerbs([
    'create' => 'cadastrar',
    'edit' => 'editar'
]);*/

Route::get('/', function () {
    return view('welcome');
});

/**
Route::view('/form','form');

Route::get('/users/1','UserController@index');

Route::get('/getData','UserController@getData');

Route::post('/postData','UserController@postData');

Route::put('/users/1', 'UserController@testePut');

Route::patch('/users/1', 'UserController@testePatch');


Route::match(['put', 'patch'], '/users/2','UserController@testeMatch');


Route::delete('/users/1', 'UserController@destroy');

Route::any('/users', 'UserController@any');
 */
//para metodos que não são implementados por Resource criar a rota antes da rota resource
 //Route::get('/posts/premium','PostController@premium');
 //Route::resource('posts', 'PostController');
 //exemplo de resource customizado passando os metodos que deseja no only
 //Route::resource('posts', 'PostController')->only('index','show');
  //exemplo de resource customizado passando os metodos que não deseja no except only
  //Route::resource('posts', 'PostController')->except('index','show');

 //para sobre escrever um metodo implementado por resource criar essa nova rota após a rota de resource
 //Route::get('/posts','PostController@teste');


Route::get('/users',function(){
    echo 'Listagem dos usuarios da minha base';
});

Route::view('/form','form');

//responsavel por gerar a saida de rotas inválidas
Route::fallback(function(){
    echo '<h1>Seja muito bem vido a nossa página 404.</h1>';
});

//redirecionando uma rota
Route::redirect('/users/add',url('/form'), 301);

Route::get('/posts','PostController@index')->name("posts.index");

Route::get('/posts/index','PostController@indexRedirect')->name("posts.indexRedirect");

