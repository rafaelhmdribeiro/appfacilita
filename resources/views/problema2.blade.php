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
            </p>
            <form id="form1" name="form1" method="POST" action="{{route('imprimirRecibo')}}">
                @csrf
                <div class="row">
                    <div class="col-lg-4 m-form__group-sub">
                        <label class="form-control-label">Livro:</label>
                        <input type="text" name="livro" maxlength="100" id="livro" placeholder="Digite o nome do Livro"
                            class="form-control m-input">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-4 m-form__group-sub">
                        <label class="form-control-label">Tipo de Usuário: </label><br>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" value="prof" class="btn-check" name="tipo" id="btnradio1" autocomplete="off"
                                checked>
                            <label class="btn btn-outline-primary" for="btnradio1">Professor</label>

                            <input type="radio" value="aluno" class="btn-check" name="tipo" id="btnradio2" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio2">Aluno</label>
                        </div>
                    </div>
                </div><br><br>
                <div class="row mb-3">
                    <div class="col-md-4 themed-grid-col">
                        <button type="submit" id="imprimir" class="btn btn-success">Imprimir Recibo</button>
                    </div>
                </div>
            </form>
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
    <script type="text/javascript" src="{{{ URL::asset('js/jquery-3.6.0.min.js')}}}"></script>
    <script type="text/javascript" src="{{{ URL::asset('js/jquery.validate.min.js')}}}"></script>
    <script>
        $('#form1').validate({
            rules: {
                livro: {
                    required: true,
                    minlength: 3
                },
            },
            messages:{
                livro:{
                    required:"Por favor, informe o nome do Livro",
                    minlength:"O nome deve ter pelo menos 3 caracteres"
             },
            }
        });

    </script>
</body>

</html>