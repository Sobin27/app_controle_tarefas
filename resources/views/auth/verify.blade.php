@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Valide seu e-mail para continuar o seu registro</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Reenviamos um e-mail para você com o link de validação
                        </div>
                    @endif

                    Antes de utilizar os recursos da aplicação, por favor valide seu e-mail através do link de verificação que enviamos para o seu email
                    <br>
                        Caso não tenha recebido o e-mail de verificação, clique no link a seguir para reenviar o link
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Clica aqui</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
