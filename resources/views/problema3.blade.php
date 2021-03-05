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
            <h4>Problema 3</h4>
            <p class="lead">Criar algoritmos com um campo que possa receber apenas números e vírgulas, separe os valores
                enviados e valide aqueles que são um número válido da Sequência de Fibonacci e imprima os números de
                forma crescente, conforme o exemplo:<br>
                CAMPO RECEBE: 1,13,55,21,5,83<br>
                IMPRIME: 1,5,13,21,55<br>
            </p>
            <form id="form1" name="form1" action="javascript:;">
                @csrf
                <div class="row">
                    <div class="col-lg-4 m-form__group-sub">
                        <label class="form-control-label">Digite os númetos:</label>
                        <input type="text" name="num" id="num" placeholder="Digite os números, separados por vírgula"
                            class="form-control m-input">
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-lg-4 m-form__group-sub">
                        <p id="resultado"></p>
                    </div>
                </div><br>
                <br>
                <div class="row mb-3">
                    <div class="col-md-4 themed-grid-col">
                        <button id="validar" class="btn btn-success">Validar Sequência de Fibonacci
                        </button>
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
    <script type="text/javascript" src="{{{ URL::asset('js/jquery.blockUI.js')}}}"></script>
    <script>
        $(document).on('keypress', '#num', function(e) {
            var $this = $(this);
            var key = (window.event)?event.keyCode:e.which;
            if((key > 47 && key < 58) || (key == 44)) {
                return true;
            } else {
                return (key == 8 || key == 0)?true:false;
            }
        });
        $('#form1').validate({
            rules: {
                num: {
                    required: true,
                },
            },
            messages:{
                num:{
                    required:"Por favor, informe os números",
             },
            }
        });
        $('#validar').click(function() {
        if ($('#form1').valid()) {
        var dadosFormulario = $('#form1').serialize();
        $.ajax({
            type: "POST",
            url: '{{route('fibonacci')}}',
            data: dadosFormulario, 
            dataType: 'JSON',
            success: function(data) {
                $('#resultado').html('');
                $('#resultado').append("<b>Resultado:</b> " + data);
            }
        });

        }
    });
    </script>
</body>

</html>