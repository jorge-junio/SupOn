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
            include ("conexao.php");

            $cpf = (INT) isset($_GET["cpf"])?$_GET["cpf"]: 0;

            $consulta = "DELETE FROM Cliente WHERE cpf = '$cpf'";
            
            if($cpf > 0)
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
            <li><a href="cadastrar_sup.php">Cadastrar</a></li>
            <li class="divider"></li>
            <li><a href="editar_sup.php">Editar</a></li>
            <li class="divider"></li>
            <li><a href="listar_sup.php">Listar</a></li>
            <li class="divider"></li><li class="divider"></li>
            <li><a href="excluir_sup.php">Remover</a></li> 
        </ul>
        
        <ul id="dropdown4" class="dropdown-content">
            <li><a href="index.html">Sair</a></li>
        </ul>
        <nav style="background: #37474f;">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="listar_fun.php" class="left brand-logo">  SupOn</a>
                    <a href="#" data-activates="mobile-demo" class="right button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
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
                                <object id="front-page-logo"><h3>HOSTEL J&T</h3></br></object>
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
                                                <a href="listar_fun.php">Listar</a>
                                            </li>
                                            <li>
                                                <a href="excluir_fun.php">Remover</a>
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
                                                <a href="cadastrar_sup.php">Cadastrar</a>
                                            </li>
                                            <li>
                                                <a href="editar_sup.php">Editar</a>
                                            </li>
                                            <li>
                                                <a href="listar_sup.php">Listar</a>
                                            </li>
                                            <li>
                                                <a href="excluir_sup.php">Remover</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                    
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-teal white-text">Perfil<i class="material-icons right white-text">arrow_drop_down</i></a>
                                    <div class="collapsible-body" style="display: none;">
                                        <ul>
                                            <li>
                                                <a href="index.html">Sair</a>
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
                <a href="excluir_sup.php" class="breadcrumb">Remover Supermercados</a>
            </div>
                </div></div></nav>
        <div class="section"></div>
        <div class="section"></div>
    <div class="container">  
        <!-- Page Content goes here --> 
        <div class="row white darken-2">
            <div class="section"></div>
            <form class="col s8 offset-s2" method="get" action="excluir_sup.php" id="for_fun">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="cnpj" type="text" class="validate" name="cnpj" required="" />
                        <label class="active" for="cpf"><i class="material-icons left">verified_user</i>CNPJ</label>
                    </div>
                </div>
                
                <div class="row">
                    <button class="btn waves-effect waves-light col s6 offset-s3" type="submit" name="action" >
                        Excluir<i class="material-icons right">send</i>
                    </button>
                </div>
                
                <div class="section"></div>
                
            </form>
            <div class="section"></div>
        </div>
        <div class="section"></div>
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
        <script type="text/javascript">$(document).ready(function() {$('select').material_select();});</script>
        <!--<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
        -->
        <!--<SCRIPT language="javascript">
         $(document).ready(function () {
            $('#telefone').mask('(99) 9 9999-9999');
            $('#cpf').mask('999.999.999-99');
            return false;
        });
        </SCRIPT>-->
        
        
    </body>
</html>
