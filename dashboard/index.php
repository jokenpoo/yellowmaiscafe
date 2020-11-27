<?php
    //Header
    include_once 'includes/header.php';
    //Connection
    require_once 'php_action/db_connect.php';
?>

<div class="row">
    <div class="col s12 m8 push-m2">
        <h3 class="light">Produtos</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Categoria:</th>
                    <th>Descrição:</th>
                    <th>Preço:</th>
                    <th>Imagem:</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                //Getting information from database
                $sql = "SELECT * FROM produtos";
                $result = mysqli_query($connect, $sql);

                //Check if any data has been returned
                if (mysqli_num_rows($result) > 0):
                    while($data = mysqli_fetch_array($result)):
                    ?>
                    <tr>
                        <!-- Information from database -->
                        <td><?php echo $data['nome'] ?></td>
                        <td><?php echo $data['categoria'] ?></td>
                        <td><?php echo $data['descricao'] ?></td>
                        <td><?php echo $data['preco'] ?></td>
                        <td><?php echo $data['imagem'] ?></td>

                        <!-- Buttons edit and delete -->
                        <td><a href="edit.php?id=<?php echo $data['id'] ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                        <td><a href="#modal<?php echo $data['id'] ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                        <!-- Modal Structure -->
                        <div id="modal<?php echo $data['id'] ?>" class="modal">
                            <div class="modal-content">
                                <h4>Opa!</h4>
                                <p>Você realmente deseja excluir este produto?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="php_action/delete.php" method="post">
                                    <!-- Buttons inside modal -->
                                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                    <button type="submit" name="btn-delete" class="btn red">Delete</button>
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </tr>
                    <?php endwhile;
                        else:?>
                        <tr>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                        </tr>
                    <?php
                        endif;
                    ?>
            </tbody>
        </table>
        <br>
        <a href="add.php" class="btn">Novo Produto</a>
    </div>
</div>

<?php
    //Footer
    include_once 'includes/footer.php';
?>


