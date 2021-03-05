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
            <h4>Problema 2</h4>
            <p class="lead">A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será
                emprestado, o tipo de usuário (professor ou aluno), o algoritmo deve imprimir um recibo mostrando o nome
                do livro, o tipo de usuário por extenso e o total de dias de empréstimo.
                Considerar que o professor tem 10 dias para devolver o livro o aluno somente 3 dias.<br>
            </p><br><br>
            <div class="row">
                <div class="col-md-2 themed-grid-col text-center">
                    <b>Nome do Livro:</b>
                </div>
                <div class="col-md-4 themed-grid-col text-center">
                    {{$nomeLivro}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 themed-grid-col text-center">
                    <b>Usuário:</b>
                </div>
                <div class="col-md-4 themed-grid-col text-center">
                    {{$dias == 10 ? "Professor" : "Aluno"}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 themed-grid-col text-center">
                    <b>Total de Dias:</b>
                </div>
                <div class="col-md-4 themed-grid-col text-center">
                    {{$dias}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 themed-grid-col text-center">
                    <b>Data da Entrega:</b>
                </div>
                <div class="col-md-4 themed-grid-col text-center">
                    {{date('d/m/Y',  strtotime($dataEntrega))}}
                </div>
            </div>
            <br>
            <br>
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