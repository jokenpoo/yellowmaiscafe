<?php
//Header
include_once 'includes/header.php';
//Connection
include_once 'php_action/db_connect.php';

if (isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM produtos WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_array($result);
endif;

?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Produto</h3>
        <form action="php_action/update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $data['nome'] ?>">
                <label for="nome">Name</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="categoria" id="categoria" value="<?php echo $data['categoria'] ?>">
                <label for="categoria">Categoria</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="descricao" id="descricao" value="<?php echo $data['descricao'] ?>">
                <label for="descricao">Descrição</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="preco" id="preco" value="<?php echo $data['preco'] ?>">
                <label for="preco">Preço</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="imagem" id="imagem" value="<?php echo $data['imagem'] ?>">
                <label for="imagem">Imagem</label>
            </div>
            <button type="submit" name="btn-edit" class="btn">Atualizar</button>
            <a href="index.php" class="btn green">Lista de Produtos</a>
        </form>
    </div>
</div>

<?php
//Footer
include_once 'includes/footer.php';
?>

