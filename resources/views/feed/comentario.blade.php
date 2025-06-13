teste<!-- resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
    <!-- Main -->
    <section id="main">
        <div class="container">

            <!-- Content -->
                    <article class="box post">
                        <header>
                            <h2>{{ $postagem->titulo }}</h2>
                            <p>Categoria: {{ $postagem->categoria->nome }}</p>
                        </header>
                        <p>{{!! $postagem->descricao !!}}</p>
                        <p>Autor: {{ $postagem->autor->name }}</p>

                    </article>

                    <!-- FORMULÁRIO -->

                    <form action="{{ url('/comentario')}}" method="post">
                        @csrf
                        <div class="form-group">
                        <label>Comentário:</label>
                        <input type="hidden" name="postagem_id" value="{{ $postagem->id }}">
                        <textarea id="w3review" class="form-control" name="conteudo" rows="4" cols="50">
                        </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">ENVIAR</button>
                    </form>

                    @foreach($postagem->comentarios as $value)
                        <p>{{ $value->conteudo }}</p>
                        <p> ->> {{ $value->autor->name }}</p>
                    @endforeach

        </div>

    </section>


@endsection
