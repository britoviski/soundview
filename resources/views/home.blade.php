@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        {{ __('Olá!') }}
                    @can('is_admin')
                        <p>Você logou com uma conta de usuário administrador</p>
                    @else
                        <p>Você logou com uma conta de usuário padrão</p>
                    @endcan


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
