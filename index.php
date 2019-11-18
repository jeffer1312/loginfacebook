<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login facebook</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <h2>facebook</h2>
            </div>
            <!-- logo -->
            <form method="post" class="form-login">
                <div class="form-element">
                    <p>Email ou telefone</p>
                    <input type="email">
                </div>
                <div class="form-element">
                    <p>Senha</p>
                    <input type="password">
                </div>
                <div class="form-element">
                    <input type="submit" name="acao" value="Entrar">
                </div>
            </form>
            <!-- form-login -->
            <div class="clear"></div>

        </div>
        <!-- container -->
    </header>
    <section class="content">
        <div class="container flex ">
            <div class="w50">
                <div class="wraper">
                    <div class="recent">
                        <h2>Login recentes</h2>
                        <p>clique na sua foto ou adicione uma conta.</p>
                    </div>
                    <div class="flex row">
                        <div class="img">
                            <img src="./images/user.jpg">
                            <p>jefferson</p>
                        </div>
                        <div class="add">
                            <h2><i class="fas fa-plus-circle"></i></h2>
                            <p>adicionar conta</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w50">
                <div class="wrap">
                    <div class="title">
                        <h2>Criar uma nova conta</h2>
                        <p>É rápido e fácil</p>
                    </div>

                    <form class="cadastro">
                        <div class="flex row">
                            <div class="w50 ">
                                <input type="text" name="Nome" placeholder="Nome" required>
                            </div>
                            <div class="50">
                                <input type="text" name="sobrenome" placeholder="Sobrenome" required>
                            </div>
                        </div>
                        <div class="w100">
                            <input type="email" name="email" placeholder="Celular ou email" required></div>
                        <div class="w100 ">
                            <input type="password" name="senha" placeholder="Nova senha" required>
                        </div>


                    </form>
                    <div class="born">
                        <p>Data de nascimento</p>
                        <span class="dia-aniversario">
                                <select name="nascimento-dia" aria-label="dia">
                                    <option value="0">dia</option>
                                    <?php
                                        for($i = 1; $i <= 31; $i++){
                                    ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php }?>
                                  
                                </select>
                            </span>
                        <span class="mes-aniversario">
                                    <select name="nascimento-mes" aria-label="mes">
                                      
                                      <option value="0">Mes</option>                                     
                                      <option value="1">Jan</option>
                                      <option value="2">Fev</option>
                                      <option value="3">Mar</option>
                                      <option value="4">Mai</option>
                                      <option value="5">Abr</option>
                                      <option value="6">Jun</option>
                                      <option value="7">Jul</option>
                                      <option value="8">Ago</option>
                                      <option value="9">Set</option>
                                      <option value="10">Out</option>
                                      <option value="11">Nov</option>
                                      <option value="12">Dez</option>
                        
                                    </select>
                            </span>
                        <span class="ano-aniversario">
                                    <select name="nascimento-ano" aria-label="ano">
                                      <option value="0">Ano</option>    
                                      <?php
                                      for($i = 2019; $i >= 1905 ; $i--){
                                  ?>
                                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                  <?php }?>
                                                                          
                                    </select>
                            </span>
                    </div>
                    <div class="flex">
                        <div class="radiobox">
                            <span><input type="radio" name="sexo" value="Masculino">Masculino</span>

                        </div>
                        <div class="radiobox">
                            <span><input type="radio" name="sexo" value="Feminino">Feminino</span>
                        </div>
                    </div>
                    <!-- born -->
                    <input type="submit" name="acao" value="cadastrar">
                </div>
                <!-- w50 criar conta -->
            </div>
        </div>
        <!-- container flex -->

    </section>
    <!-- content -->

    <section class="linguas">
        <div class="container">
            <a class="selected-lingua" href="#">Portugues (BR)</a>
            <a href="#">English (US)</a>
            <a href="#">Español</a>
            <a href="#"> Français (France)</a>
            <a href="#">  Italiano</a>
            <a href="#">العربية</a>
            <a href="#">हिन्दी</a>
            <a href="#">中文(简体)</a>
            <a href="#">日本語</a>
        </div>
        <!-- container -->
        <div style="border: 0;padding-top:10px;" class="container">

            <a class="selected-lingua" href="#">Cadastre-se</a>
            <a href="#">Cadastre-se</a>
            <a href="#">Entrar</a>
            <a href="#">Messenger</a>
            <a href="#">Facebook Lite</a>
            <a href="#">Watch</a>
            <a href="#">Pessoas</a>
            <a href="#">Páginas</a>
            <a href="#">Categorias de Página</a>
            <a href="#">Locais</a>
            <a href="#">Jogos</a>
            <a href="#">Marketplace</a>
            <a href="#">Grupos</a>
            <a href="#">Instagram</a>
            <a href="#">Local</a>
            <a href="#"> Campanhas de arrecadação de fundos</a>
            <a href="#">Serviços</a>
            <a href="#">Sobre</a>
            <a href="#">Criar anúncio</a>
            <a href="#">Criar Página</a>
            <a href="#"> Desenvolvedores </a>
            <a href="#">Carreiras</a>
            <a href="#">Privacidade</a>
            <a href="#">Cookies</a>
            <a href="#">Opções de anúncio</a>
            <a href="#">Termos</a>
            <a href="#">Ajuda</a>

        </div>
        <!-- container -->
    </section>

</body>

</html>