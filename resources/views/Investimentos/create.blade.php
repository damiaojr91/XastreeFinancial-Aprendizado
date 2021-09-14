@extends('Layout.layout')

@section('content')

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-6 p-lg-3 mx-auto my-5">
            <h1 class="display-5 fw-normal">Novo Investimento</h1>
            <p class="lead fw-normal">Preencha os dados abaixo para cadastrar um novo Investimento: </p>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <form method="POST" action="{{ route('storeInvestimento') }}">

        @csrf

        <div class="col-md-6 p-lg-3 mx-auto my-5 form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Investimento: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="colFormLabel" name="nome" placeholder="Insira o nome do investimento.">
            </div>

            <label for="colFormLabel" class="col-sm-2 col-form-label">Tipo: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="colFormLabel" name="tipo" placeholder="Insira o tipo do investimento.">
            </div>

            <div class="btn-group mx-auto my-5" role='group'>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('home') }}" class="btn btn-info btn" role="button">Voltar</a>
            </div>
        </div>
    </form>

@endsection
