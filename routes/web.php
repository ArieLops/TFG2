<?php

Route::group(['middleware' => 'auth', 'namespace' => 'Praticante'], function(){
    Route::get('praticante',                  'PraticanteController@index')->name('praticanteGrafico');
    Route::get('praticante',                  'PraticanteController@getData')->name('praticante');
    Route::get('praticante/exame/adicionar',  'PraticanteController@create')->name('praticanteExameAdicionar');
    Route::post('praticante/exame/',          'PraticanteController@store')->name('praticanteExameSalvar');
});

Route::group(['middleware' => 'auth', 'namespace' => 'Admin'], function(){
    Route::get('admin',        'AdminController@index')->name('admin');
    /*Rotas Pessoa*/
    Route::get('admin/pessoa/adicionar',            'UserController@create')->name('adicionarPessoa');
    Route::get('admin/pessoa/',                     'UserController@index')->name('listarPessoa');
    Route::post('admin/pessoa/',                    'UserController@store')->name('salvarPessoa');
    Route::get('admin/pessoa/{id}/editar',          'UserController@edit')->name('editarPessoa');
    Route::put('admin/pessoa/{id}',                 'UserController@update')->name('atualizarPessoa');
    Route::get('admin/pessoa/{id}/excluir',         'UserController@destroy')->name('excluirPessoa');
    Route::get('admin/pessoa/searchUserObjetivo',   'UserController@searchUserObjetivo');
    /*Rotas Treinos*/
    Route::get('admin/treino/adicionar',         'TreinoController@create')->name('adicionarTreino');
    Route::get('admin/treino',                   'TreinoController@index')->name('listarTreino');
    Route::post('admin/treino',                  'TreinoController@store')->name('salvarTreino');
    Route::get('admin/treino/{id}/editar',       'TreinoController@edit')->name('editarTreino');
    Route::put('admin/treino/{id}',              'TreinoController@update')->name('atualizarTreino');
    Route::get('admin/treino/{id}/excluir',      'TreinoController@destroy')->name('excluirTreino');
    Route::get('admin/treino/getExercicioList',  'TreinoController@getExercicioList');
    /*Rotas Objetivo*/
    Route::get('admin/configuracao/objetivo/adicionar',       'ObjetivoController@create')->name('adicionarObjetivo');
    Route::get('admin/configuracao/objetivo',                 'ObjetivoController@index')->name('listarObjetivo');
    Route::post('admin/configuracao/objetivo',                'ObjetivoController@store')->name('salvarObjetivo');
    Route::get('admin/configuracao/objetivo/{id}/editar',     'ObjetivoController@edit')->name('editarObjetivo');
    Route::put('admin/configuracao/objetivo/{id}',            'ObjetivoController@update')->name('atualizarObjetivo');
    Route::get('admin/configuracao/objetivo/{id}/excluir',    'ObjetivoController@destroy')->name('excluirObjetivo');
    /*Rotas Aparelho*/
    Route::get('admin/configuracao/aparelho/adicionar',       'AparelhoController@create')->name('adicionarAparelho');
    Route::get('admin/configuracao/aparelho',                 'AparelhoController@index')->name('listarAparelho');
    Route::post('admin/configuracao/aparelho',                'AparelhoController@store')->name('salvarAparelho');
    Route::get('admin/configuracao/aparelho/{id}/editar',     'AparelhoController@edit')->name('editarAparelho');
    Route::put('admin/configuracao/aparelho/{id}',            'AparelhoController@update')->name('atualizarAparelho');
    Route::get('admin/configuracao/aparelho/{id}/excluir',    'AparelhoController@destroy')->name('excluirAparelho');
    /*Rotas Musculatura*/
    Route::get('admin/configuracao/musculatura/adicionar',    'MusculaturaController@create')->name('adicionarMusculatura');
    Route::get('admin/configuracao/musculatura',              'MusculaturaController@index')->name('listarMusculatura');
    Route::post('admin/configuracao/musculatura',             'MusculaturaController@store')->name('salvarMusculatura');
    Route::get('admin/configuracao/musculatura/{id}/editar',  'MusculaturaController@edit')->name('editarMusculatura');
    Route::put('admin/configuracao/musculatura/{id}',         'MusculaturaController@update')->name('atualizarMusculatura');
    Route::get('admin/configuracao/musculatura/{id}/excluir', 'MusculaturaController@destroy')->name('excluirMusculatura');
    /*Rotas Exercicio*/
    Route::get('admin/configuracao/exercicio/adicionar',      'ExercicioController@create')->name('adicionarExercicio');
    Route::get('admin/configuracao/exercicio',                'ExercicioController@index')->name('listarExercicio');
    Route::post('admin/configuracao/exercicio',               'ExercicioController@store')->name('salvarExercicio');
    Route::get('admin/configuracao/exercicio/{id}/editar',    'ExercicioController@edit')->name('editarExercicio');
    Route::put('admin/configuracao/exercicio/{id}',           'ExercicioController@update')->name('atualizarExercicio');
    Route::get('admin/configuracao/exercicio/{id}/excluir',   'ExercicioController@destroy')->name('excluirExercicio');
    Route::get('admin/configuracao/exercicio/findMusculatura','ExercicioController@findMusculatura');
    Route::get('admin/configuracao/exercicio/findAparelho',   'ExercicioController@findAparelho');
    /*Rotas Anamnese*/
    Route::get('admin/anamnese/adicionar',       'AnamneseController@create')->name('adicionarAnamnese');
    Route::get('admin/anamnese',                 'AnamneseController@index')->name('listarAnamnese');
    Route::post('admin/anamnese',                'AnamneseController@store')->name('salvarAnamnese');
    Route::get('admin/anamnese/{id}/editar',     'AnamneseController@edit')->name('editarAnamnese');
    Route::put('admin/anamnese/{id}',            'AnamneseController@update')->name('atualizarAnamnese');
    Route::get('admin/anamnese/{id}/excluir',    'AnamneseController@destroy')->name('excluirAnamnese');
    Route::get('admin/anamnese/getLocalList',       'AnamneseController@getLocalList');
    /*Rotas Exame*/
    Route::get('admin/exame/adicionar',          'ExameController@create')->name('adicionarExame');
    Route::post('admin/exame/adicionar',         'ExameController@store')->name('salvarExame');
    Route::get('admin/exame',                    'ExameController@index')->name('listarExame');
    Route::post('admin/exame',                   'ExameController@store')->name('salvarExame');
    Route::get('admin/exame/{id}/editar',        'ExameController@edit')->name('editarExame');
    Route::put('admin/exame/{id}',               'ExameController@update')->name('atualizarExame');
    Route::get('admin/exame/{id}/download',      'ExameController@download')->name('downloadExame');
    /*Rotas Avaliação*/
    Route::get('admin/avaliacao/adicionar',       'AvaliacaoController@create')->name('adicionarAvaliacao');
    Route::get('admin/avaliacao',                 'AvaliacaoController@index')->name('listarAvaliacao');
    Route::post('admin/avaliacao',                'AvaliacaoController@store')->name('salvarAvaliacao');
    Route::get('admin/avaliacao/{id}/editar',     'AvaliacaoController@edit')->name('editarAvaliacao');
    Route::put('admin/avaliacao/{id}',            'AvaliacaoController@update')->name('atualizarAvaliacao');
    Route::get('admin/avaliacao/{id}/excluir',    'AvaliacaoController@destroy')->name('excluirAvaliacao'); 
    /*Rota Limpeza*/
    Route::get('admin/limparcache', function(){
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        return "<h3>Aplicação Limpa!</h3>";
    });
});

Route::get('/', 'Site\SiteController@index')->name('site');

Auth::routes();

