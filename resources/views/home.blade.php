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
    <section class="container secao secao-start">
        <div class="secao-container">
        <figure>
            <img src="" alt="Logo Meu Bandeco">            
        </figure>
        </div>
    </section>
    <section class="container secao secao-precadastro">
        <div class="secao-container">
        <div class="conteúdo">
            <header>
                <h4 class="page-title negative-color">Pré-cadastro</h4>
        </header>
            <form action="{{ route('form_submit') }}" method="POST">
                <div class="form-group" id="nome_cliente">
                    <input type="text" name="nome_cliente" placeholder="Qual o seu nome?" class="form-control">
                </div>

                <div class="form-group" id="tipo_c">
                    <select name="tipo_cliente" class="form-control">
                        <option value="">Selecione seu tipo de cadastro</option>
                        <option value="1">Restaurante</option>
                        <option value="2">Consumidor</option>
                    </select>
                </div>

                <div class="form-group" id="nome_negocio">
                    <input type="text" name="nome_negocio" placeholder="Qual o nome do seu negócio?"
                        class="form-control">
                </div>

                <div class="form-group" id="seguimento">
                    <select name="seguimento" class="form-control">
                        <option value="">Qual é o segmento do seu negócio?</option>
                        <option value="Barzinho">Barzinho</option>
                        <option value="Lanchonete">Lanchonete</option>
                        <option value="Restaurante">Restaurante</option>
                        <option value="Sorveteria/Açaiteria">Sorveteria/Açaiteria</option>
                    </select>
                </div>
                <div class="form-group" id="email_cliente">
                    <input type="text" name="email" placeholder="Qual o seu email?" class="form-control">
                </div>

                <div class="form-group" id="email_cliente_confirm">
                    <input type="text" name="email_confirmation" placeholder="Confirme seu email" class="form-control">
                </div>

                <div class="form-group" id="cidade">
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
                </div>

                <div class="form-group" id="telefone">
                    <input type="text" name="telefone" placeholder="Qual o seu telefone?" class="form-control">
                </div>

                <input type="submit" value="enviar" class="btn btn-default--negativo">

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
v
    gtag('config', 'G-R7YK5QLYTV');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>