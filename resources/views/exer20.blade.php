@extends ('layout')
@section('titulo', 'Exercicio 20')
@section('conteudo')

        <h1>Exercicio 20</h1>
        <form method="post" action="/exer20resp">
            <div class="mb-3">
                <label for="dist" class="form-label">Digite a distância percorrida em KM</label>
                <input type="number" id="dis" step ="any" name="dist" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="tempo" class="form-label">Digite o tempo gasto em horas</label>
                <input type="number" id="tempo" name="tempo" step="any" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        @isset($velocidade)
            <p>Velocidade média: {{ number_format($velocidade, 2, ',', '.')}}km/h</p>
        @endisset
@endsection