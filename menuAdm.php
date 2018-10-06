        
        <ul id="dropdown4" class="dropdown-content">
            <li><a href="#">Editar</a></li>
			<li><a href="index.html">Sair</a></li>
        </ul>
		
		<div class="navbar-fixed">
		
        <nav style="background: #37474f;">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="listar_fun.php" class="left brand-logo">  SupOn</a>
                    <ul class="right">
                        <!-- Dropdown Trigger -->
                        <?php 
                        $usuario = "ADMIN";
                        if ($usuario == "ADMIN")
                            echo '<li><a href="listar_fun.php">Clientes</a></li>';
                        ?>
                        <li><a href="listar_sup.php">Supermercados</a></li>
                        <li><a href="listar_pro.php">Produtos</a></li>
                        <li><a href="buscar_adm.php?q_b=&tipo_b=0&action=#">Buscar</a></li>
                        <li><a class="dropdown-button" href="index.html" data-activates="dropdown4">Perfil<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                    
                </div>
            </div>
        </nav> 
		</div>