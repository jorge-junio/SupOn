        
<ul id="dropdown4" class="dropdown-content">
    <li><a href="editarPerfil.php">Editar</a></li>
    <li><a href="../destroySession.php">Sair</a></li>
</ul>

<div class="navbar-fixed">

    <nav style="background: #37474f;">
        <div class="container">
            <div class="nav-wrapper">
                <a href="./home.php" class="left brand-logo">  SUPON</a>
                <ul class="right">
                    <!-- Dropdown Trigger -->
                    <!-- <li><a href="sup_buscar_produto.php">Buscar Produtos</a></li> -->
                    <li><a href="listar_pro.php">Produtos</a></li>
                    <li><a href="./sup_pedidos.php">Pedidos</a></li>
                    <li><a href="editarPerfil.php"><i class="material-icons left">business</i> <?php echo $_SESSION["nome_usuario"]; ?></a></li>
                    <li><a href="../destroySession.php"><i class="material-icons left">exit_to_app</i>Sair</a></li>
                </ul>

            </div>
        </div>
    </nav> 
</div>
