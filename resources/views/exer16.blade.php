@extends('layout')
@section('titulo', 'Exercicio 16')
@section('conteudo')

<h1>Exercicio 16</h1>
<form method="post" action="/exer16resp">
    <div class="mb-3">
        <label for="valor" class="form-label">Digite o valor do produto</label>
        <input type="number" id="valor" step="any" name="valor" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label for="desc" class="form-label">Digite o percentual de desconto</label>
        <input type="number" id="desc" step="any" name="desc" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($valorDesc)
        <p>Valor com desconto: R${{number_format($valorDesc, 2, ',', '.')}}</p>
    @endisset

@endsection