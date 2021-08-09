<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
        integrity="undefined" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/react@17/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <title>Meu bandeco - Pré Cadastro</title>
</head>

<body>
    <div class="svg-container svg-sprite">
        {!! file_get_contents('assets/svg/defs/mbdc-sprite-defs.svg') !!}
    </div>
    <section id="start" class="container-fluid secao secao-start  text-center flex-items-center">
        <div class="secao-container mx-auto">
            <figure>
                <svg class="svg-container brand-logotipo">
                    <use xlink:href="#mbc-logotipo-negativa"></use>
                </svg>
            </figure>
            <p>
                Simplifique os pedidos do seu delivery com a gente!
            </p>
            <div class="btn-group">
                <a class="btn btn-neg btn-cta" href="#pre-cadastro" role="button">Pré-cadastro</a>
            </div>
        </div>
    </section>
    <section id="pre-cadastro" class="container-fluid secao secao-precadastro">
        <div class="secao-container">
            <div class="conteúdo">
                <header>
                    <a href="#start">
                        <figure>
                            <svg class="svg-container brand-simb">
                                <use xlink:href="#mbc-simb-positivo-primario"></use>
                            </svg>
                        </figure>
                    </a>
                    <p> Se cadastre e se prepare para novidades para seu negócio.</p>
                </header>


                <form action="{{ route('form_submit') }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group" id="nome_cliente">
                        <label for="nome" class="form-label">Qual o seu nome?</label>
                        <input id="nome" type="text" name="nome_cliente" class="form-control" required>
                        <div class="valid-feedback">
                            Vou te chamar sempre assim ;)
                        </div>
                    </div>

                    <div class="form-group" id="tipo_c">
                        <label for="tipo_cliente" class="form-label">Selecione seu tipo de cadastro</label>
                        <select id="tipo_cliente" name="tipo_cliente" class="form-control" required>
                            <option value="0" selected="selected"></option>
                            <option value="1">Quero cadastrar meu cardápio</option>
                            <option value="2">Quero fazer pedidos de comida</option>
                        </select>
                        <div class="valid-feedback">Ótima escolha</div>
                    </div>

                    <div class="form-group" id="nome_negocio" required>
                        <label for="negocio_nome" class="form-label">Qual o nome do seu negócio?</label>
                        <input id="negocio_nome" type="text" name="nome_negocio" class="form-control" required>
                        <div class="valid-feedback">O nome do seu negócio é o chave agora!</div>
                    </div>

                    <div class="form-group" id="segmento">
                        <label for="segmento_neg" class="form-label">Qual é o segmento do seu negócio?</label>
                        <select id="segmento_neg" name="segmento" class="form-control" required>
                            <option value="1">Barzinho</option>
                            <option value="2">Lanchonete</option>
                            <option value="3">Restaurante</option>
                            <option value="4">Sorveteria/Açaiteria</option>
                            <option value="5">Padaria</option>
                            <option value="9">Outros</options>
                        </select>
                    </div>
                    <div class="form-group" id="email_cliente">
                        <label for="email" class="form-label">Qual o seu email?</label>
                        <input id="email" type="email" name="email" class="form-control" required>
                        <div class="valid-feedback">Não se preocupe. Só usaremos estritamente para contato e envio de
                            promoções e que poderá cancelar a qualquer momento no seu email.</div>
                    </div>

                    <div class="form-group" id="email_cliente_confirm">
                        <label for="email_confirmation" class="form-label">Confirme seu email</label>
                        <input id="email_confirmation" type="email" name="email_confirmation" class="form-control"
                            required autocomplete="off">
                    </div>

                    {{-- <div class="form-group" id="cidade">
                        <select name="estado" class="form-control">
                            <option value="">De onde você é?</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div> --}}

                    <div class="form-group" id="telefone">
                        <label for="phone" class="for-label">Qual o seu telefone?</label>
                        <input id="phone" type="phone" name="telefone" class="form-control" required>
                        <div class="valid-feedback">NUNCA vamos te ligar para pedir dados.</div>
                    </div>

                    <input type="hidden" name="id_indicador" value="<?php echo ($id != null) ?$id:'';?>" />

                    <input type="submit" value="Enviar" class="btn btn-primary">

                    @if($errors->any())
                    @foreach($errors->all() as $error)
                    {{ $error }}<br />
                    @endforeach;
                    @endif
                </form>
            </div>
        </div>
    </section>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R7YK5QLYTV"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-R7YK5QLYTV');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
    (function() {
        'use strict';
        init();

        function init() {
            
            $("#segmento").hide();
            $("#nome_negocio").hide();

            $("#tipo_cliente").change(function(){
                var tipo_c = $(this).val();
                if(tipo_c == 1){
                    set_modo_empresa();
                };
                if(tipo_c == 2){                    
                    set_modo_usuario();
                }
            });
        };

        function set_modo_usuario() {            
            $("#segmento").hide();
            $("#nome_negocio").hide();
        };

        function set_modo_empresa() {            
            $("#segmento").show();
            $("#nome_negocio").show();
        };
    })()
    </script>
</body>

</html>