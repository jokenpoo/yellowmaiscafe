<?php
require_once './includes/header.php';

require_once './dashboard/php_action/db_connect.php';

?>

<!-- Conteúdo do Site -->
<div class="container mt-3">
    <h2 class="display-4 text-dark">Cardápio <span class="display-4 text-light"> Yellow Mais Café</span></h2>
    <hr>

    <!-- Imagem Promocional -->
    <div class="jumbotron" style="background-image: url(http://source.unsplash.com/1280x300/?rice); background-size: 100%;">
        <div class="container text-white">
            <h1 class="display-5 text-center">Menu</h1>
        </div>


    </div>


    <!-- Teste
        <div class="container-fluid mb-3">
            <a href="https://google.com"><img src="http://source.unsplash.com/1280x300/?rice"
                    class="img-fluid rounded mx-auto d-block" alt="Imagem responsiva">
            </a>
        </div>

         -->
    <!-- Fim da Imagem Promocional -->
    <hr>
    <div class="text-dark">
        <p>Mussum Ipsum, cacilds vidis litro abertis. Nullam volutpat risus nec leo commodo, ut interdum diam
            laoreet. Sed non consequat odio. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Quem manda
            na minha terra sou euzis! Viva Forevis aptent taciti sociosqu ad litora torquent.

            Paisis, filhis, espiritis santis. Atirei o pau no gatis, per gatis num morreus. Interagi no mé, cursus
            quis, vehicula ac nisi. Cevadis im ampola pa arma uma pindureta.</p>

    </div>
    <hr>



    <?php
    //Cardápio_Salgados
    include('./includes/salgados.php');
    include('./includes/sobremesas.php');
    ?>
    




    <?php
    require_once './includes/footer.php';

    ?>