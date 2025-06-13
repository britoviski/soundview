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

                    @foreach($postagem->comentarios as $value)
                        <p>{{ $value->conteudo }}</p>
                    @endforeach

        </div>

    </section>


@endsection
