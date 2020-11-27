<?php
//Header
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Produto</h3>
        <form action="php_action/create.php" method="post">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Produto</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="categoria" id="categoria">
                <label for="categoria">Categoria</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="descricao" id="descricao">
                <label for="descricao">Desrição</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="preco" id="preco">
                <label for="preco">Preço</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="imagem" id="imagem">
                <label for="imagem">Imagem</label>
            </div>


            <button type="submit" name="btn-register" class="btn">Cadastrar</button>
            <a href="index.php" class="btn green">Lista de Produtos</a>
        </form>
    </div>
</div>




<?php
//Footer
include_once 'includes/footer.php';
?>