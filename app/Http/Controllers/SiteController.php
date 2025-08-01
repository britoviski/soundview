<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Postagem;
use App\Models\User;

class SiteController extends Controller
{
    public function index(){
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $autores = User::orderBy('name', 'ASC')->get();
        $postagens = Postagem::orderBy('created_at', 'DESC')->paginate(10);
        return view('welcome', compact('categorias', 'postagens', 'autores'));
    }

    public function PostagemByCategoriaId($id){
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $autores = User::orderBy('name', 'ASC')->get();
        $postagens = Postagem::where('categoria_id', $id)->orderBy('created_at', 'DESC')->paginate(10);
        return view('welcome', compact('categorias', 'postagens', 'autores'));
    }

    public function PostagemByAutorId($id){
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $autores = User::orderBy('name', 'ASC')->get();
        $postagens = Postagem::where('user_id', $id)->orderBy('created_at', 'DESC')->paginate(10);
        return view('welcome', compact('categorias', 'postagens', 'autores'));
    }

    public function comentario($id){
       //dd('Comentário: ' . $id);
       $categorias = Categoria::orderBy('nome', 'ASC')->get();
       $autores = User::orderBy('name', 'ASC')->get();
       $postagem = Postagem::find($id);
       return view('feed.comentario', compact('categorias','autores', 'postagem'));
    }

}
