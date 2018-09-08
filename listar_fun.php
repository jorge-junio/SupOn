<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.min.css" rel="stylesheet" type="text/css">
        <title>SupOn</title>
        <style type="text/css">
            html{
                min-height: 100%;
                background-image: linear-gradient(to bottom, rgba(25,25,25, 0.85), rgba(220,220,220, 0.85));
            }
            
            .forms {
                margin-top: 10%;
            }
            

        </style>
        <?php
            include("conexao.php");

            $consulta = "SELECT cpf, nome, endereco, login, senha FROM Cliente";


            $con = $dao->query($consulta) or die($dao->error);
        ?>
    </head>
    <body>
        
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="cadastrar_fun.php">Cadastrar</a></li>
            <li class="divider"></li>
            <li><a href="editar_fun.php">Editar</a></li>
            <li class="divider"></li>
            <li><a href="listar_fun.php">Listar</a></li>
            <li class="divider"></li><li class="divider"></li>
            <li><a href="excluir_fun.php">Remover</a></li>
        </ul>
        <ul id="dropdown2" class="dropdown-content">
            <li><a href="#">Cadastrar</a></li>
            <li class="divider"></li>
            <li><a href="#">Editar</a></li>
            <li class="divider"></li>
            <li><a href="#">Listar</a></li>
            <li class="divider"></li><li class="divider"></li>
            <li><a href="#">Remover</a></li>
            <li class="divider"></li>
            <li><a href="#">Carrinho</a></li> 
        </ul>
        <!--<ul id="dropdown3" class="dropdown-content">
            <li><a href="cadastrar_quarto.php">Cadastrar</a></li>
            <li class="divider"></li>
            <li><a href="editar_quarto.php">Editar</a></li>
            <li class="divider"></li>
            <li><a href="listar_quarto.php">Listar</a></li>
            <li class="divider"></li><li class="divider"></li>
            <li><a href="excluir_quarto.php">Remover</a></li>
        </ul>-->
        <ul id="dropdown4" class="dropdown-content">
            <!--<li><a href="registrar_checkin.php">Checkin</a></li>
            <li class="divider"></li>
            <li><a href="registrar_checkout.php">Checkout</a></li>
            <li class="divider"></li>
            <li><a href="tempo.php">Tempo de Estadia</a></li>
            <li class="divider"></li>
            <li><a href="status.php">Status</a></li>
            <li class="divider"></li>-->
            <li><a href="index.html">Sair</a></li>
        </ul>
        <nav style="background: #37474f;">
            <div class="container">
                <div class="nav-wrapper" >
                    <a href="listar_fun.php" class="left brand-logo" >  SupOn</a>
                    <a href="#" data-activates="mobile-demo" class="right button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down" >
                        <!-- Dropdown Trigger -->
                        <?php 
                        $usuario = "ADMIN";
                        if ($usuario == "ADMIN")
                            echo '<li><a class="dropdown-button" href="#" data-activates="dropdown1">Clientes<i class="material-icons right">arrow_drop_down</i></a></li>';
                        ?>
                        <li><a class="dropdown-button" href="#" data-activates="dropdown2">Supermercados<i class="material-icons right">arrow_drop_down</i></a></li>
                        
                        <li><a class="dropdown-button" href="index.html" data-activates="dropdown4">Perfil<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo" style="background: #455a64;">
                        <!--<li class="logo">
                            <a id="logo-container" href="home_adm.html" class="brand-logo">
                                <object id="front-page-logo"><h3>SupOn</h3></br></object>
                            </a>
                        </li>-->
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion" data-collapsible="accordion" style="background: #455a64;">
                                <?php
                                if($usuario == "ADMIN")
                                echo'
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-teal white-text">Clientes <i class="material-icons right white-text">arrow_drop_down</i></a>
                                    <div class="collapsible-body" style="display: none;">
                                        <ul>
                                            <li>
                                                <a href="cadastrar_fun.php">Cadastrar</a>
                                            </li>
                                            <li>
                                                <a href="editar_fun.php">Editar</a>
                                            </li>
                                            <li>
                                                <a href="#!">Listar</a>
                                            </li>
                                            <li>
                                                <a href="#!">Remover</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>';
                                        ?>
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-teal white-text">Supermercados<i class="material-icons right white-text">arrow_drop_down</i></a>
                                    <div class="collapsible-body" style="display: none;">
                                        <ul>
                                            <li>
                                                <a href="#!">Cadastrar</a>
                                            </li>
                                            <li>
                                                <a href="#!">Editar</a>
                                            </li>
                                            <li>
                                                <a href="#!">Listar</a>
                                            </li>
                                            <li>
                                                <a href="#!">Remover</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                   <!-- <li class="bold">
                                    <a class="collapsible-header waves-effect waves-teal white-text">Quartos<i class="material-icons right white-text">arrow_drop_down</i></a>
                                    <div class="collapsible-body" style="display: none;">
                                        <ul>
                                            <li>
                                                <a href="#!">Cadastrar</a>
                                            </li>
                                            <li>
                                                <a href="#!">Editar</a>
                                            </li>
                                            <li>
                                                <a href="#!">Listar</a>
                                            </li>
                                            <li>
                                                <a href="#!">Remover</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>-->
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-teal white-text">Perfil<i class="material-icons right white-text">arrow_drop_down</i></a>
                                    <div class="collapsible-body" style="display: none;">
                                        <ul>
                                            <li>
                                                <a href="editar_perfil.php">Editar</a>
                                            </li>
                                            <li>
                                                <a href="#!">Sair</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 
       <nav style="background: #455a64;"><div class="container center"><div class="nav-wrapper">
            <div class="col s12">
                <a href="listar_fun.php" class="breadcrumb">Home</a>
                <a href="excluir_fun.php" class="breadcrumb">Listar Cliente</a>
            </div>
                </div></div></nav>
        <div class="container">
            <div class="section"></div>
            <div class="section"></div>
            <div class="row white darken-4 ">
                <div class="container">
                    <div class="section"></div>
                    <div class="section"></div>
                    <table class="highlight centered waves-teal ">
                        <thead>
                            <tr>
                                <th>Cpf</th>
                                <th>Nome</th>
                                
                                <th>Endereço</th>
                                <th>login</th>
                                <th>senha</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($dado = $con->fetch_array()) { ?>
                            <tr class="hoverable">
                                <td><?php echo $dado["cpf"]; ?></td>
                                <td><?php echo $dado["nome"]; ?></td>
                                
                                <td><?php echo $dado["endereco"]; ?></td>
                                <td><?php echo $dado["login"]; ?></td>
                                <td><?php echo $dado["senha"]; ?></td>
                                
                            </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                    <div class="section"></div>
                    <div class="section"></div>
                </div>
            </div>
        </div>
        
        <footer class="page-footer" style="background: #455a64;"> 
            <div class="footer-copyright">
                <div class="container">
                    
                    <label class="grey-text text-lighten-4 right" style="font-family:font-family: Snell Roundhand, cursive;">SupOn</label>
                </div>
            </div>
        </footer>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript"> $(".button-collapse").sideNav(); </script>
        <!--<script type="text/javascript"> $(document).ready(function(){$('.collapsible').collapsible();});</script>-->
        
      
    </body>
</html>
