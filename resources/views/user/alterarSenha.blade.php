@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Alterar a senha de <strong>{{ auth()->user()->name }}</strong></div>

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

                @if (session('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
                @endif

                    <form action="{{ url('admin/updateSenha')}}" method="post">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                        <label>Senha antiga:</label>
                        <input type="text" name="password_old" class="form-control">

                        <label>Senha nova:</label>
                        <input type="text" name="password_new" class="form-control">

                        <label>Senha nova (repetir):</label>
                        <input type="text" name="password_new2" class="form-control">

                        </div>

                        <button type="submit" class="btn btn-primary">ENVIAR</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
