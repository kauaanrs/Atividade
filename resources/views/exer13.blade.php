@extends ('layout')
@section('titulo', 'Exercicio 13')
@section('conteudo')



    <h1>Exercicio 13</h1>
    <form method="post" action="/exer13resp">
        <div class="mb-3">
            <label for="metros" class="form-label">Digite um valor em metros </label>
            <input type="number" id="metros" step="any" name="metros" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @isset($cm)
    <p>{{number_format($cm, 2, ',', '.')}}cm</p>
    @endisset


@endsection