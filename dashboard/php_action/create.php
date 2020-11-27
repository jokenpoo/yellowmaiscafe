<?php
//Connection
require_once 'db_connect.php';

//Function against XSS
function clear($input)
{
    global $connect;
    $var = mysqli_escape_string($connect, $input);
    $var = htmlspecialchars($var);
    return $var;
}

if (isset($_POST['btn-register'])) :
    $nome = clear($_POST['nome']);
    $categoria = clear($_POST['categoria']);
    $descricao = clear($_POST['descricao']);
    $preco = clear($_POST['preco']);
    $imagem = clear($_POST['imagem']);

    $sql = "INSERT INTO produtos (nome, categoria, descricao, preco, imagem) VALUES ('$nome', '$categoria', '$descricao', '$preco', '$imagem')";
    if (mysqli_query($connect, $sql)) :
        header('Location: ../index.php');
    else :
        header('Location: ../index.php');
    endif;
endif;

?>

