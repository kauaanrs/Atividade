@extends ('layout')
@section('titulo', 'Exercicio 8')
@section('conteudo')



    <h1>Exercicio 8</h1>
    <form method="post" action="/exer8resp">
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
    
    @isset($area)
        <p>A área do retângulo é: {{number_format($area, 2, '.', ',')}}</p>
    @endisset

@endsection