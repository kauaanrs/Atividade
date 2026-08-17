@extends ('layout')
@section('titulo', 'Exercicio 10')
@section('conteudo')



    <h1>Exercicio 10</h1>
    <form method="post" action="/exer10resp">
        <div class="mb-3">
            <label for="altura" class="form-label">Digite a altura do retângulo</label>
            <input type="number" id="altura" step="any" name="altura" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="largura" class="form-label">Digite a largura do retângulo</label>
            <input type="number" id="largura" step="any" name="largura" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    
    @isset($perimetro)
        <p>O perimetro do retângulo é: {{number_format($perimetro, 2, '.', ',')}}</p>
    @endisset

@endsection