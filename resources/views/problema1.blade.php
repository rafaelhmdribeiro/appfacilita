<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AppFacilita</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="py-4">

    <main>
        <div class="container">

            <h1>Teste AppFacilita</h1>
            <p class="lead">Teste desenvolvido por <b>Rafael Henrique Miziara Diniz Ribeiro.</b> <br>
                <a target="_blank" href="https://github.com/rafaelhmdribeiro"> GitHub </a>
            </p>
            <h4>Problema 1</h4>
            <p class="lead">Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce 3
                centímetros por ano. Construir um algoritmo que calcule e imprima quantos anos serão necessários para
                que Juca seja maior que Chico.<br>
            </p>

            <h4>Resposta</h4>
            <p>Serão necessários <b>{{$resp}}</b> anos para Juca ficar maior do que Chico.</p>
            <pre><code>
    $chico = 150;
    $juca = 110;
    $anos = 0;
    while ($chico >= $juca) {
        $chico += 2;
        $juca += 3;
        $anos += 1;
    }
    return $anos;
            </code></pre>
            <br>
            <div class="row mb-3">
                <div class="col-md-4 themed-grid-col">
                    <a href="{{url('/')}}">
                        <button type="button" class="btn btn-warning">Voltar</button>
                    </a>
                </div>
            </div>
    </main>

</body>

</html>