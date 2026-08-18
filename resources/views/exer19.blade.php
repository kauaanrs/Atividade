@extends ('layout')
@section('titulo', 'Exercicio 19')
@section('conteudo')

<h1>Exercicio 19</h1>
<form method="post" action="/exer19resp">
    <div class="mb-3">
        <label for="dias" class="form-label">Digite um valor em dias</label>
        <input type="number" id="dias" name="dias" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($horas, $minutos, $segundos)
    <p>Horas: {{$horas}}</p>
    <p>Minutos: {{$minutos}}</p>
    <p>Segundos: {{$segundos}}</p>
@endisset

@endsection