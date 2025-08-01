<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PostagemController;
Use App\Http\Controllers\SiteController;
Use App\Http\Controllers\UserController;
Use App\Http\Controllers\ComentarioController;

//Route::get('/', function () {
//    return view('welcome');
//});

//----------------------------------------------------------
//SITE
//----------------------------------------------------------

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('/PostagemByCategoriaId/{id}', [SiteController::class, 'PostagemByCategoriaId'])->name('site.PostagemByCategoriaId');
Route::get('/PostagemByAutorId/{id}', [SiteController::class, 'PostagemByAutorId'])->name('site.PostagemByAutorId');

//   /feed/postagem/' . $value->id . '/comentario
Route::get('/feed/postagem/{id}/comentario', [SiteController::class, 'comentario'])->name('comentario');

Route::post('comentario', [ComentarioController::class, 'store'])->name('comentario.store');

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //----------------------------------------------------------
    //CATEGORIA
    //----------------------------------------------------------
    Route::middleware(['can:is_admin'])->group(function () {

        Route::get('/categoria', [CategoriaController::class, 'index'])->middleware('can:is_admin')->name('categoria.index');

        Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');

        Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');

        Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');

        Route::get('/categoria/{edit}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');

        Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');

        Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');
    });

    //----------------------------------------------------------
    //POSTAGEM
    //----------------------------------------------------------

    Route::get('/postagem', [PostagemController::class, 'index'])->name('postagem.index');

    Route::get('/postagem/create', [PostagemController::class, 'create'])->name('postagem.create');

    Route::post('/postagem', [PostagemController::class, 'store'])->name('postagem.store');

    Route::get('/postagem/{id}', [PostagemController::class, 'show'])->name('postagem.show');

    Route::get('/postagem/{edit}/edit', [PostagemController::class, 'edit'])->name('postagem.edit');

    Route::put('/postagem/{id}', [PostagemController::class, 'update'])->name('postagem.update');

    Route::delete('/postagem/{id}', [PostagemController::class, 'destroy'])->name('postagem.destroy');

    //----------------------------------------------------------
    //ADMIN
    //----------------------------------------------------------

    Route::get('/admin/alterarSenha', [UserController::class, 'alterarSenha'])->name('admin.alterarSenha');
    Route::put('admin/updateSenha', [UserController::class, 'updateSenha'])->name('admin.updateSenha');


});
