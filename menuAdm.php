 
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