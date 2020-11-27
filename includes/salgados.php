<!-- Menu Cardápio -->




<div id="accordion">
    <div class="card bg-transparent border-0 ">
        <div class="card-header border-0 mb-0 bg-transparent">
            <button class="btn btn-link btn-block text-left btn-lg text-dark " data-target="#collapse1" data-toggle="collapse">
                Salgados
            </button>

        </div>
        <?php
        //Getting information from database
        $sql = "SELECT * FROM produtos WHERE categoria like 'Tortas'";
        $result = mysqli_query($connect, $sql);
        //Check if any data has been returned
        if (mysqli_num_rows($result) > 0) :
            while ($data = mysqli_fetch_array($result)) :

        ?>

                <div class="collapse" id="collapse1" data-parent="#accordion">

                    <!-- Linha 01 -->
                    <div class="row mt-2">
                        <div class="col sm-6">
                            <div class="card border-0 flex-md-row shadow-sm h-md-250">
                                <img class="card-img-right flex-auto " src="https://s3.amazonaws.com/institucional-statics-files/site/uploads/smores.png" alt="Card image cap">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <h3>
                                        <?php echo $data['nome'];
                                        ?>
                                    </h3>

                                    <p class="card-text mb-auto"><?php echo $data['descricao'] ?></p>

                                    <h4><?php echo $data['preco'] ?></h4>
                                </div>
                                <button class="btn" ><a href=""> Faça seu Orçamento</button></a>
                            </div>


                        </div>


                    </div>
                </div>

            <?php endwhile;
        else : ?>

            <div class="row mb-2">
                <div class="col-lg-6">
                    <div class="card border-0 flex-md-row shadow-sm h-md-250">
                        <img class="card-img-right flex-auto " src="https://s3.amazonaws.com/institucional-statics-files/site/uploads/smores.png" alt="Card image cap">
                        <div class="card-body d-flex flex-column align-items-start">
                            <h3 class="mb-0">
                                Salgado 01
                            </h3>
                            <p class="card-text mb-auto">This is a wider card with supporting text below
                                as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        endif;
        ?>

    </div>
</div>