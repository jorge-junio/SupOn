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
                background-image: linear-gradient(to bottom, rgba(49,79,79, 0.85), rgba(220,220,220, 0.85));
            }
            
            .forms {
                margin-top: 10%;
            }
            
        </style>
        <?php
        include ("conexao.php");

        $cargo = isset($_GET["tipo"])?$_GET["tipo"]:null;
        $nome = isset($_GET["nome"])?$_GET["nome"]:"";
        $cpf = (INT) isset($_GET["cpf"])?$_GET["cpf"]: 0;
        $endereco = isset($_GET["endereco"])?$_GET["endereco"]:"";
        $salario = (FLOAT) isset($_GET["salario"])?$_GET["salario"]:0;
        $email = isset($_GET["email"])?$_GET["email"]:"";
        $telefone = (INT) isset($_GET["telefone"])?$_GET["telefone"]:0;
        $senha = isset($_GET["senha"])?$_GET["senha"]:"";

        $consulta = "UPDATE funcionario SET cpf_f = '$cpf', nome = '$nome', email = '$email', 
endereco = '$endereco', salario = '$salario', 
            telefone = '$telefone', cargo = '$cargo', senha = '$senha' WHERE cpf_f = '$cpf' ";

        if($cpf != 0)
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
            <li><a href="cadastrar_hosp.php">Cadastrar</a></li>
            <li class="divider"></li>
            <li><a href="editar_hosp.php">Editar</a></li>
            <li class="divider"></li>
            <li><a href="listar_hosp.php">Listar</a></li>
            <li class="divider"></li><li class="divider"></li>
            <li><a href="excluir_hosp.php">Remover</a></li>
            <li class="divider"></li>
            <li><a href="registrar_cliente.php">Registrar Em Um Quarto</a></li> 
        </ul>
        <ul id="dropdown3" class="dropdown-content">
            <li><a href="cadastrar_quarto.php">Cadastrar</a></li>
            <li class="divider"></li>
            <li><a href="editar_quarto.php">Editar</a></li>
            <li class="divider"></li>
            <li><a href="listar_quarto.php">Listar</a></li>
            <li class="divider"></li><li class="divider"></li>
            <li><a href="excluir_quarto.php">Remover</a></li>
        </ul>
        <ul id="dropdown4" class="dropdown-content">
            <li><a href="registrar_checkin.php">Checkin</a></li>
            <li class="divider"></li>
            <li><a href="registrar_checkout.php">Checkout</a></li>
            <li class="divider"></li>
            <li><a href="tempo.php">Tempo de Estadia</a></li>
            <li class="divider"></li>
            <li><a href="status.php">Status</a></li>
            <li class="divider"></li>
            <li><a href="index.html">Sair</a></li>
        </ul>
        <nav>
            <div class="container">
                <div class="nav-wrapper">
                    <a href="home.php" class="left brand-logo">  HOSTEL J&T</a>
                    <a href="#" data-activates="mobile-demo" class="right button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <!-- Dropdown Trigger -->
                        <?php 
                        $usuario = "ADMIN";
                        if ($usuario == "ADMIN")
                            echo '<li><a class="dropdown-button" href="#" data-activates="dropdown1">Funcionários<i class="material-icons right">arrow_drop_down</i></a></li>';
                        ?>
                        <li><a class="dropdown-button" href="#" data-activates="dropdown2">Hóspedes<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="dropdown-button" href="#" data-activates="dropdown3">Quartos<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="dropdown-button" href="index.html" data-activates="dropdown4">Opções<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo" style="background: #EE6363;">
                        <!--<li class="logo">
                            <a id="logo-container" href="home_adm.html" class="brand-logo">
                                <object id="front-page-logo"><h3>HOSTEL J&T</h3></br></object>
                            </a>
                        </li>-->
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion" data-collapsible="accordion" style="background: #EE6363;">
                                <?php
                                if($usuario == "ADMIN")
                                echo'
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-teal white-text">Funcionários <i class="material-icons right white-text">arrow_drop_down</i></a>
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
                                    <a class="collapsible-header waves-effect waves-teal white-text">Hóspedes<i class="material-icons right white-text">arrow_drop_down</i></a>
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
                                    <li class="bold">
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
                                </li>
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
       
        
        
        <nav><div class="container center"><div class="nav-wrapper">
            <div class="col s12">
                <a href="home.php" class="breadcrumb">Home</a>
                <a href="editar_fun.php" class="breadcrumb">Editar Funcionário</a>
            </div>
                </div></div></nav>
        <div class="section"></div>
        <div class="section"></div>
    <div class="container">  
        <!-- Page Content goes here --> 
        <div class="row white darken-2">
            <div class="section"></div>
            <form class="col s8 offset-s2" method="get" action="editar_fun.php" id="for_fun">
                
                <div class="row">
                    <div class="input-field col s12">
                        <select id="tipo" name="tipo" required="">
                            <option value="" disabled selected>Opções:</option>
                            <option value="1">Administrador</option>
                            <option value="2">Funcionário</option>
                        </select>
                        <label for="tipo"><i class="material-icons left">supervisor_account</i>Tipo:</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="cpf" type="text" class="validate" name="cpf" required="" />
                        <label class="active" for="cpf"><i class="material-icons left">verified_user</i>CPF</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="nome" type="text" class="validate" name="nome" />
                        <label class="active" for="nome"><i class="material-icons left">person_pin</i>Nome</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input  id="endereco" type="text" class="validate" name="endereco" />
                        <label class="active" for="endereco"><i class="material-icons left">location_on</i>Endereço</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="salario" type="text" class="validate" name="salario" />
                        <label class="active" for="salario"><i class="material-icons left">work</i>Salário</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate" name="email">
                        <label class="active" for="email"><i class="material-icons left">email</i>Email</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="telefone" type="tel" class="validate" name="telefone">
                        <label class="active" for="telefone"><i class="material-icons left">phone</i>Telefone</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="senha" type="password" class="validate" name="senha">
                        <label class="active" for="senha"><i class="material-icons left">lock</i>Senha</label>
                    </div>
                </div>
                
                <div class="row">
                    <button class="btn waves-effect waves-light col s6 offset-s3" type="submit" name="action" >
                        Atualizar<i class="material-icons right">send</i>
                    </button>
                </div>
                
                <div class="section"></div>
                
            </form>
            <div class="section"></div>
        </div>
        <div class="section"></div>
    </div>
        
        
    <footer class="page-footer"> 
        <div class="footer-copyright">
            <div class="container">
                © 2017 Copyright Text
                <label class="grey-text text-lighten-4 right">Jorge e Thálison</label>
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
