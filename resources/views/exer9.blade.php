@extends ('layout')
@section('titulo', 'Exercicio 7')
@section('conteudo')


    <div class="container py-3">
        <h1>Exercicio 9 </h1>
        <form method="post" action="/exer9resp">
            <div class="mb-3">
                <label for="raio" class="form-label">Digite o raio do circulo</label>
                <input type="number" id="raio" step="any" name="raio" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        @isset($area)
            <p>Área: {{number_format($area, 2, '.',',')}}</p>
        @endisset
@endsection