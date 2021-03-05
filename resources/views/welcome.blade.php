<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AppFacilita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="py-4">
    <main>
        <div class="container">

            <h1>Teste AppFacilita</h1>
            <p class="lead">Teste desenvolvido por <b>Rafael Henrique Miziara Diniz Ribeiro.</b> <br>
                <a target="_blank" href="https://github.com/rafaelhmdribeiro"> GitHub </a>
            </p>

            <h2 class="mt-4">Tecnologias Utilizadas</h2>
            <p>Aqui esta a lista das principais tecnologias utilizadas nesse teste.</p>

            <p>
                <ul>
                    <li>Docker</li>
                    <li>PHP 7.3</li>
                    <li>Apache</li>
                    <li>Laravel 8.12</li>
                    <li>Composer</li>
                    <li>Bootstrap 5.0</li>
                    <li>jQuery 3.6</li>
                    <li>jQuery Validate</li>
                    <li>jQuery Ajax</li>
                    <li>jQuery blockUI</li>
                </ul>
            </p>
            <h2 class="mt-4">Testes Resolvidos</h2><br>
            <div class="row">
                <div class="col-md-4 themed-grid-col text-center">
                    <a href="{{route('problema1')}}">
                        <button type="button" class="btn btn-primary">Problema 1</button>
                    </a>
                </div>
                <div class="col-md-4 themed-grid-col text-center">
                    <a href="{{url('2')}}">
                        <button type="button" class="btn btn-primary">Problema 2</button>
                    </a>
                </div>
                <div class="col-md-4 themed-grid-col text-center">
                    <a href="{{url('3')}}">
                        <button type="button" class="btn btn-primary">Problema 3</button>
                    </a>
                </div>
            </div>
    </main>
</body>

</html>