        
<ul id="dropdown4" class="dropdown-content">
    <li><a href="editarPerfil.php">Editar</a></li>
    <li><a href="../destroySession.php">Sair</a></li>
</ul>

<div class="navbar-fixed">

    <nav style="background: #37474f;">
        <div class="container">
            <div class="nav-wrapper">
                <a href="listar_fun.php" class="left brand-logo">  SupOn</a>
                <ul class="right">
                    <!-- Dropdown Trigger -->
                    <li><a href="../view/buscar_adm.php?q_b=&tipo_b=0&action=#">Buscar Produtos</a></li>
                    <li><a href="listar_pro.php">Produtos</a></li>
                    <li><a class="dropdown-button" href="index.html" data-activates="dropdown4"><?php echo $_SESSION["nome_usuario"]; ?><i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>

            </div>
        </div>
    </nav> 
</div>
