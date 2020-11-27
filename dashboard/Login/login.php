<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div class="container">
        <a class="links" id="paracadastro"></a>
        <a class="links" id="paralogin"></a>

        <div class="content">
            <!--FORMULÁRIO DE LOGIN-->
            <div id="login">
                <form method="post" action="">
                    <h1>Login</h1>
                    <p>
                        <label for="nome_login">Login</label>
                        <input id="nome_login" name="nome_login" required="required" type="text" placeholder="ex. seuemail@provedor.com" />
                    </p>

                    <p>
                        <label for="email_login">Senha</label>
                        <input id="email_login" name="email_login" required="required" type="password" placeholder="ex. senha" />
                    </p>

                    <p>
                        <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
                        <label for="manterlogado">Manter-me logado</label>
                    </p>

                    <p>
                        <input type="submit" value="Logar" />
                    </p>


                </form>
            </div>

            <!--FORMULÁRIO DE CADASTRO-->

        </div>
    </div>
</body>

</html>