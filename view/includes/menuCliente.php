        
<ul id="dropdown4" class="dropdown-content">
    <li><a href="editarPerfil.php">Editar</a></li>
    <li><a href="../destroySession.php">Sair</a></li>
</ul>

<div class="navbar-fixed">

    <nav style="background: #37474f;">
        <div class="container">
            <div class="nav-wrapper">
                <!-- Implementar carrinho --> 
                <a href="./home.php" class="left brand-logo">  SUPON</a> 
                <ul class="right">
                    <!-- Dropdown Trigger -->
                    <li><a href="../view/cli_buscar_super.php">Buscar Produtos</a></li>
                    <li><a href="./cli_compras.php">Compras</a></li>
                    <li><a href="cli_carrinho.php">Carrinho</a></li>
                    <li><a href="editarPerfil.php"><i class="material-icons left">account_circle</i><?php echo $_SESSION["nome_usuario"]; ?></a></li>
                    <li><a href="../destroySession.php"><i class="material-icons left">exit_to_app</i>Sair</a></li>
                </ul>

            </div>
        </div>
    </nav> 
</div>