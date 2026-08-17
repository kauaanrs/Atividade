@extends('layout')
@section('titulo', 'Exercicio 12')
@section('conteudo')

        <h1>Exercicio 12</h1>
        <form method="post" action="/exer12resp">
            <div class="mb-3">
                <label for="valor1" class="form-label">informe o primeiro valor: </label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">informe o segundo valor: </label>
                <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($potencia)
            <p> Potência: {{ $potencia }} </p>
        @endisset
        
@endsection