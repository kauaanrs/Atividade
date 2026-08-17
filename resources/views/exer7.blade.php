@extends ('layout')
@section('titulo', 'Exercicio 7')
@section('conteudo')


    <div class="container py-3">
        <h1>Exercicio 7 </h1>
        <form method="post" action="/exer7resp">
            <div class="mb-3">
                <label for="far" class="form-label">Digite a temperatura em fahrenheit</label>
                <input type="number" id="far" step="any" name="far" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        @isset($celsius)
            <p>Graus celsius: {{number_format($celsius, 2, '.',',')}}</p>
        @endisset
@endsection