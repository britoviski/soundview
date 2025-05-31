@extends('adminlte::page')

@section('content')

<link rel="stylesheet" href="{{ url("/richtexteditor/rte_theme_default.css") }}" />
<script type="text/javascript" src="{{ url("/richtexteditor/rte.js") }}"></script>
<script type="text/javascript" src="{{ url('/richtexteditor/plugins/all_plugins.js') }}"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem - CREATE</div>

                <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <form action="{{ url('postagem')}}" method="post">
                        @csrf

                        <select name="categoria_id" class="form-control">
                            @foreach ($categorias as $value)
                                <option value="{{ $value->id }}">{{ $value->nome }}</option>

                            @endforeach


                          </select>

                        <div class="form-group">

                        <label>Título:</label>
                        <input type="text" name="titulo" class="form-control">

                        <label>Descrição:</label>
                        <textarea id="inp_editor1" name="descricao" rows="5" cols="33" class="form-control">

                        </textarea>


                        </div>
                        <button type="submit" class="btn btn-primary">ENVIAR</button>

                    </form>

                    <script>
                        var editor1 = new RichTextEditor("#inp_editor1");
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
