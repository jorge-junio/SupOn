<ul id="dropdown4" class="dropdown-content">
    <li><a href="editarPerfil.php">Editar</a></li>
    <li><a href="../destroySession.php">Sair</a></li>
</ul>

<ul id="dropdown3" class="dropdown-content">
    <li><a href="buscar_adm.php?q_b=&action=#">Produto</a></li>
    <li><a href="buscar_adm_sup.php?q_b=&action=#">Supermercado</a></li>
</ul>

<div class="navbar-fixed">

    <nav style="background: #37474f;">
        <div class="container">
            <div class="nav-wrapper">
                <a href="./home.php" class="left brand-logo">  SupOn</a>
                <ul class="right">
                    <!-- Dropdown Trigger -->
                    <li><a href="listar_fun.php">Clientes</a></li>
                    <li><a href="listar_sup.php">Supermercados</a></li>
                    <li><a href="listar_pro.php">Produtos</a></li>
                    <li><a class="dropdown-button" href="index.html" data-activates="dropdown3">Realizar Busca<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-button" href="index.html" data-activates="dropdown4"><i class="material-icons left">account_circle</i> <?php echo $_SESSION["nome_usuario"]; ?><i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>

            </div>
        </div>
    </nav> 
</div>