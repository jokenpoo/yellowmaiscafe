<?php
//Connection
require_once 'db_connect.php';

//Function against XSS
function clear($input) {
    global $connect;
    $var = mysqli_escape_string($connect, $input);
    $var = htmlspecialchars($var);
    return $var;
}

if (isset($_POST['btn-edit'])):
    $nome = clear($_POST['nome']);
    $categoria = clear($_POST['categoria']);
    $descricao = clear($_POST['descricao']);
    $preco = clear($_POST['preco']);
    $imagem = clear($_POST['imagem']);
    $id = clear($_POST['id']);
    

    $sql = "UPDATE produtos SET nome = '$nome', categoria = '$categoria', descricao = '$descricao', preco = '$preco', imagem = '$imagem' WHERE id = '$id'";
    if(mysqli_query($connect, $sql)):
        header('Location: ../index.php');
    else:
        header('Location: ../index.php');
    endif;
endif;