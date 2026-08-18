@extends ('layout')
@section('titulo', 'Exercicio 14')
@section('conteudo')



    <h1>Exercicio 14</h1>
    <form method="post" action="/exer14resp">
        <div class="mb-3">
            <label for="km" class="form-label">Digite a distância em km </label>
            <input type="number" id="km" step="any" name="km" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($milhas)
    <p>{{number_format($milhas, 2, ',', '.')}} milhas</p>
    @endisset


@endsection