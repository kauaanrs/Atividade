@extends ('layout')
@section('titulo', 'Exercicio 6')
@section('conteudo')


    <div class="container py-3">
        <h1>Exercicio 6 </h1>
        <form method="post" action="/exer6resp">
            <div class="mb-3">
                <label for="celsius" class="form-label">Digite a temperatura em graus celsius</label>
                <input type="number" id="celsius" step="any" name="celsius" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        @isset($far)
            <p>Graus fahrenheit: {{number_format($far, 2, '.',',')}}</p>
        @endisset
@endsection