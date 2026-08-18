@extends('layout')
@section('titulo', 'Exercicio 15')
@section('conteudo')

<h1>Exercicio 15</h1>
<form method="post" action="/exer15resp">
    <div class="mb-3">
        <label for="peso" class="form-label">Digite o seu peso em kg</label>
        <input type="number" id="peso" step="any" name="peso" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label for="altura" class="form-label">Digite sua altura em metros</label>
        <input type="number" id="altura" step="any" name="altura" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($imc)
        <p>Seu imc é: {{number_format($imc, 2, ',', '.')}}</p>
    @endisset

@endsection