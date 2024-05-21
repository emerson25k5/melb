<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" class="icone-title" href="imagens/melb.jpg" type="image/png">
    <title>Mel B. | Bem-vindo</title>
    <!-- Adicione os links para os arquivos CSS e JavaScript do Materialize e Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Licorice">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

    <header class="z-depth-4">
        <img src="imagens/melb_bg.png"  width="200" height="auto" alt="Última Tendência" class="responsive-img">
    </header>

<div class="conteudo container">

        <br>

        <div class="redes-sociais">
            <a href="https://www.instagram.com/melb_be/" class="tooltipped" data-position="top" data-tooltip="@melb_be"><img src="imagens/ico-insta.png" alt="instagram_melb" class="rede-social"></a>
            <a href="https://shopee.com.br/melb.g" class="tooltipped hide-on-med-and-up" data-position="top" data-tooltip="Shopee"><img src="imagens/ico-shopee.png" alt="loja_melb" class="rede-social"></a>
            <a class='modal-trigger tooltipped hide-on-med-and-down' data-position="top" data-tooltip="Shopee" href="#modal2"><img src="imagens/ico-shopee.png" alt="loja_melb" class="rede-social"></a>
            <a href="https://wa.me/message/M6Z2QMHVP5VGF1" class="tooltipped hide-on-med-and-up" data-position="top" data-tooltip="Whatsapp"><img src="imagens/ico-whats.png" alt="whatsapp_melb" class="rede-social"></a>
            <a class='modal-trigger tooltipped hide-on-med-and-down' data-position="top" data-tooltip="Whatsapp" href="#modal1"><img src="imagens/ico-whats.png" alt="whatsapp_melb" class="rede-social"></a>
        </div>

        <div id="modal1" class='modal'>
            <img src="imagens/qr-code-whatsapp.png" alt="qr-code" class="img-qr-code"><br>
            <div class="center top">
                <p>ou</p>
            <a href="https://wa.me/message/M6Z2QMHVP5VGF1" target="_blank" class="botao-dentro-modal btn tooltipped center" data-position="top" data-tooltip="Abrir Whatsapp Web">Abrir o Whatsapp WEB</a>
            </div><br>           
        </div>

        <div id="modal2" class='modal'>
            <img src="imagens/shopee-loja.png" alt="qr-code" class="img-qr-code"><br>
            <div class="center top">
            <a href="https://shopee.com.br/melb.g" target="_blank" class="botao-dentro-modal btn tooltipped center" data-position="top" data-tooltip="Abrir Loja na Shopee">Abrir LOJA</a>
            </div><br>        
        </div>

        <div>
            <h1>Seja bem-vindo</h1>
        </div>

        <div class="card mb-3" style="max-width: 500px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="imagens/jaque_corpo_int.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Quem sou eu</h5>
                    <p class="card-text">Curso de modelagem plana, corte e costura, modelagem no sistema cad audaces. Graduação em design de moda. Em 2023 criei minha 
                     marca e meu maior objetivo é que alcançar muitas pessoas.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
                </div>
            </div>
        </div>        

        <div class="card hoverable">
            <div class="card-image waves-effect waves-light">
                <img class="activator" src="imagens/jaque.jpg">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Jaqueline Barros<i class="material-icons right">add</i></span>
                <p><a href="https://www.instagram.com/jaque_barros88/" class="tooltipped" data-position="right" data-tooltip="@jaque_barros88">@jaque_barros88</a></p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Quem sou eu?</span>
                <p>Curso de modelagem plana, corte e costura, modelagem no sistema cad audaces. Graduação em design de moda. Esse ano (2023) criei minha 
                     marca e meu maior objetivo é que alcançar muitas pessoas.</p>
            </div>
        </div>

        <br><br>

        <h6 class="left">Osasco Fashion Week</h6>
        <div class="carousel" id="carr-osa">  
            <a class="carousel-item" id="carr-fotos-item" href="#"><img class="z-depth-2 hoverable" src="imagens/osas-fashion/look1.jpg"></a>
            <a class="carousel-item" id="carr-fotos-item" href="#"><img class="z-depth-2 hoverable" src="imagens/osas-fashion/look2.jpg"></a>
            <a class="carousel-item" id="carr-fotos-item" href="#"><img class="z-depth-2 hoverable" src="imagens/osas-fashion/look3.jpg"></a>
            <a class="carousel-item" id="carr-fotos-item" href="#"><img class="z-depth-2 hoverable" src="imagens/osas-fashion/all.jpg"></a>
        </div>

        <h6 class="left">Avaliaçoes de clientes</h6>
        <div class="carousel" id="carr-avaliacoes">  
            <a class="carousel-item" id="carr-av-item" href="#"><img class="z-depth-2 hoverable" src="imagens/ava2.png"></a>
            <a class="carousel-item" id="carr-av-item" href="#"><img cclass="z-depth-2 hoverable" src="imagens/ava1.png"></a>
            <a class="carousel-item" id="carr-av-item" href="#"><img class="z-depth-2 hoverable" src="imagens/ava3.png"></a>
        </div>
</div><br><br><br><br>

    <!-- Inicialize os componentes do Materialize -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('#carr-avaliacoes');
            var instances = M.Carousel.init(elems, options = {
                fullWidth: false,
                noWrap: true,
                indicators: true
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('#carr-osa');
            var instances = M.Carousel.init(elems, options = {
                fullWidth: false,
                noWrap: true,
                indicators: true
            });
        });
        
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.tooltipped');
            var instances = M.Tooltip.init(elems);
        });

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems, options);
        });   
    </script>

<?php include("footer.php");?>

</body>
</html>