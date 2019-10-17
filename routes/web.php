<?php

use App\Http\Models\Exercicio;
use App\Http\Models\Musculatura;
use App\Http\Models\Exercicio_Musculatura;

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin'], function(){
    Route::get('admin',        'AdminController@index')->name('admin');
    /*Rotas Pessoa*/
    Route::get('admin/pessoa/adicionar',         'PessoaController@create')->name('adicionarPessoa');
    Route::get('admin/pessoa/',                  'PessoaController@index')->name('listarPessoa');
    Route::post('admin/pessoa/',                 'PessoaController@store')->name('salvarPessoa');
    Route::get('admin/pessoa/{id}/editar',       'PessoaController@edit')->name('editarPessoa');
    Route::put('admin/pessoa/{id}',              'PessoaController@update')->name('atualizarPessoa');
    Route::get('admin/pessoa/{id}/excluir',      'PessoaController@destroy')->name('excluirPessoa');
    /*Rotas Treinos*/
    Route::get('admin/treino/adicionar',         'TreinoController@create')->name('adicionarTreino');
    Route::get('admin/treino',                   'TreinoController@index')->name('listarTreino');
    Route::post('admin/treino',                  'TreinoController@store')->name('salvarTreino');
    Route::get('admin/treino/{id}/editar',       'TreinoController@edit')->name('editarTreino');
    Route::put('admin/treino/{id}',              'TreinoController@update')->name('atualizarTreino');
    Route::get('admin/treino/{id}/excluir',      'TreinoController@destroy')->name('excluirTreino');
    /*Rotas Objetivo*/
    Route::get('admin/objetivo/adicionar',       'ObjetivoController@create')->name('adicionarObjetivo');
    Route::get('admin/objetivo',                 'ObjetivoController@index')->name('listarObjetivo');
    Route::post('admin/objetivo',                'ObjetivoController@store')->name('salvarObjetivo');
    Route::get('admin/objetivo/{id}/editar',     'ObjetivoController@edit')->name('editarObjetivo');
    Route::put('admin/objetivo/{id}',            'ObjetivoController@update')->name('atualizarObjetivo');
    Route::get('admin/objetivo/{id}/excluir',    'ObjetivoController@destroy')->name('excluirObjetivo');
    /*Rotas Aparelho*/
    Route::get('admin/aparelho/adicionar',       'AparelhoController@create')->name('adicionarAparelho');
    Route::get('admin/aparelho',                 'AparelhoController@index')->name('listarAparelho');
    Route::post('admin/aparelho',                'AparelhoController@store')->name('salvarAparelho');
    Route::get('admin/aparelho/{id}/editar',     'AparelhoController@edit')->name('editarAparelho');
    Route::put('admin/aparelho/{id}',            'AparelhoController@update')->name('atualizarAparelho');
    Route::get('admin/aparelho/{id}/excluir',    'AparelhoController@destroy')->name('excluirAparelho');
    /*Rotas Musculatura*/
    Route::get('admin/musculatura/adicionar',    'MusculaturaController@create')->name('adicionarMusculatura');
    Route::get('admin/musculatura',              'MusculaturaController@index')->name('listarMusculatura');
    Route::post('admin/musculatura',             'MusculaturaController@store')->name('salvarMusculatura');
    Route::get('admin/musculatura/{id}/editar',  'MusculaturaController@edit')->name('editarMusculatura');
    Route::put('admin/musculatura/{id}',         'MusculaturaController@update')->name('atualizarMusculatura');
    Route::get('admin/musculatura/{id}/excluir', 'MusculaturaController@destroy')->name('excluirMusculatura');
    /*Rotas Exercicio*/
    Route::get('admin/exercicio/adicionar',      'ExercicioController@create')->name('adicionarExercicio');
    Route::get('admin/exercicio',                'ExercicioController@index')->name('listarExercicio');
    Route::post('admin/exercicio',               'ExercicioController@store')->name('salvarExercicio');
    Route::get('admin/exercicio/{id}/editar',    'ExercicioController@edit')->name('editarExercicio');
    Route::put('admin/exercicio/{id}',           'ExercicioController@update')->name('atualizarExercicio');
    Route::get('admin/exercicio/{id}/excluir',   'ExercicioController@destroy')->name('excluirExercicio');
    /*Rotas Anamnese*/
    Route::get('admin/anamnese/adicionar',       'AnamneseController@create')->name('adicionarAnamnese');
    Route::get('admin/anamnese',                 'AnamneseController@index')->name('listarAnamnese');
    Route::post('admin/anamnese',                'AnamneseController@store')->name('salvarAnamnese');
    Route::get('admin/anamnese/{id}/editar',     'AnamneseController@edit')->name('editarAnamnese');
    Route::put('admin/anamnese/{id}',            'AnamneseController@update')->name('atualizarAnamnese');
    Route::get('admin/anamnese/{id}/excluir',    'AnamneseController@destroy')->name('excluirAnamnese');
    /*Rotas Exame*/
    Route::get('admin/exame/adicionar',          'ExameController@create')->name('adicionarExame');
    Route::post('admin/exame/adicionar',         'ExameController@store')->name('salvarExame');
    Route::get('admin/exame',                    'ExameController@index')->name('listarExame');
    Route::post('admin/exame',                   'ExameController@store')->name('salvarExame');
    Route::get('admin/exame/{id}/editar',        'ExameController@edit')->name('editarExame');
    Route::put('admin/exame/{id}',               'ExameController@update')->name('atualizarExame');
    //Route::get('admin/exame/{id}/excluir',       'ExameController@destroy')->name('excluirExame');
    Route::get('admin/exame/{id}/download',      'ExameController@download')->name('downloadExame');
    /*Rotas Avaliação*/
    Route::get('admin/avaliacao/adicionar',       'AvaliacaoController@create')->name('adicionarAvaliacao');
    Route::get('admin/avaliacao',                 'AvaliacaoController@index')->name('listarAvaliacao');
    Route::post('admin/avaliacao',                'AvaliacaoController@store')->name('salvarAvaliacao');
    Route::get('admin/avaliacao/{id}/editar',     'AvaliacaoController@edit')->name('editarAvaliacao');
    Route::put('admin/avaliacao/{id}',            'AvaliacaoController@update')->name('atualizarAvaliacao');
    Route::get('admin/avaliacao/{id}/excluir',    'AvaliacaoController@destroy')->name('excluirAvaliacao'); 
});

Route::get('/', 'Site\SiteController@index')->name('site');

Auth::routes();

