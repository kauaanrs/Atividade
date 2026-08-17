@extends ('layout')
@section('titulo', 'Exercicio 5')
@section('conteudo')

<h1>Exercicio 5</h1>
<form method="post" action="/exer5resp">
    <div class="mb-3">
        <label for="num1" class="form-label">Digite a primeira nota</label>
        <input type="number" step="any" id="num1" name="num1" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label for="num2" class="form-label">Segunda nota</label>
        <input type="number" step="any" id="num2" name="num2" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label for="num3" class="form-label">Terceira nota</label>
        <input type="number" step="any" id="num3" name="num3" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@isset($media)
<p>A média das notas é: {{number_format($media, 2, '.', ',')}}</p>
@endisset

@endsection