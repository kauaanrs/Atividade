@extends('layout')
@section('titulo', 'Exercicio 17')
@section('conteudo')

<h1>Exercicio 17</h1>
<form method="post" action="/exer17resp">
    <div class="mb-3">
        <label for="capital" class="form-label">Digite o capital investido</label>
        <input type="number" id="capital" step="any" name="capital" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label for="taxa" class="form-label">Digite a taxa de juros mensal</label>
        <input type="number" id="taxa" step="any" name="taxa" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label for="periodo" class="form-label">Digite a quantidade de meses</label>
        <input type="number" id="periodo" step="any" name="periodo" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($montante)
        <p>Montante final: R${{number_format($montante, 2, ',', '.')}}</p>
    @endisset

@endsection