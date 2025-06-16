<!-- resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
    <!-- Main -->
    <section id="main">
        <div class="container">

            <!-- Content -->
                @foreach ($postagens as $value)
                    <article class="box post">
                        <header>
                            <h2>{{ $value->titulo }}</h2>
                            <p>Categoria: {{ $value->categoria->nome }}</p>
                        </header>
                        <p>{!! $value->descricao !!}</p>
                        <p>Autor: {{ $value->autor->name }}</p>

                         <footer>
                            <ul class="stats">
                                <li><a href="#">General</a></li>
                                <li><a href="#" class="icon solid fa-heart">28</a></li>
                                <li><a href="{{ url('/feed/postagem/' . $value->id . '/comentario')}}" class="icon solid fa-comment">???</a></li>
                            </ul>
                        </footer>

                    </article>
                @endforeach

        </div>

    </section>

    {{ $postagens->onEachSide(1)->links('vendor.pagination.simple-default') }}


@endsection
