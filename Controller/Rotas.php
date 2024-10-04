<?php

Route::get('/', function (){
    return  view('welcome');

});

Route::get('user', function(){
    return 'Oi usuário';
});

Route::get('teste', function(){
    return [
            'nome' => 'Joazinho', 
            'sobrenome' => 'Silva'
    
    ];
});

Route::get('/users/{id}', function ($id) {
    return $id;
})

Route::get('/users/{id}/{nome}', function ($id, $nome) {
    return $id. ' - '.$nome;
});

Route::get('/users/{id}', function ($id = null) {
    return $id;

});

Route::prefix('usuarios')->group(function() {
    Route::get('', function(){
        return 'Usuario';
    });
    Route::get('/{id}', function($id) {
        return 'Mostra detalhes do usuário';
    });
    Route::get('/{id}/{permissao}', function($id, $permissao) {
        return 'Permissao do usuário';
    });

});

Route::get('/users/{id?}', function ($id = null) {
    return $id;
})->name('users');


Route::get('users/{user}', function (\App\Models\User $user) {
    return $user;
});

Route::get('/user/{user}', [\App\Http\Controllers\UsersController::class, 'show']);








?>