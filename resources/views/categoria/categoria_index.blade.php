@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria</div>

                <script>
                    function ConfirmDelete(){
                        return confirm('Tem certeza que deseja excuír este registro?')
                    }
                </script>

                <div class="card-body">
                    <a class="btn btn-success" href="{{ url('categoria/create') }}">CRIAR</a>

                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <table class="table">
                        <tr>
                          <th>ID</th>
                          <th>Nome</th>
                          <th>Ações</th>
                        </tr>
                        @foreach ($categorias as $value)

                        <tr>
                          <td>{{$value->id}}</td>
                          <td>{{$value->nome}}</td>
                          <td class="d-flex">
                            <a class="btn btn-info btn-sm me-2" href="{{ url('categoria/' . $value->id) }}">Visualizar</a>
                            <a class="btn btn-warning btn-sm me-2" href="{{ url('categoria/' . $value->id . '/edit')}}">Editar</a>
                            <form action="{{ url('categoria/' . $value->id) }}" method="post" onsubmit="return ConfirmDelete()">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">EXCLUIR</button>
                            </form>

                          </td>
                        </tr>
                        @endforeach

                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
