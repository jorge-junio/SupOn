<div class="row">
    <div class="col s6">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title"><i class="material-icons left"><?php
                        if ($_SESSION["permissao"] == "sup") {
                            echo 'business';
                        } else {
                            echo 'person';
                        }
                        ?></i><?php
                    if ($_SESSION["permissao"] == "adm") {
                        echo 'Clientes';
                    } else {
                        echo 'Perfil';
                    }
                    ?></span>
                <p></p>
            </div>
            <div class="card-action">
                <?php
                if ($_SESSION["permissao"] == "cli") {
                    echo '<a href="../view/editarPerfil_cli.php">Visitar</a>';
                } elseif ($_SESSION["permissao"] == "adm") {
                    echo '<a href="../view/listar_fun.php">Visitar</a>';
                } else {
                    echo '<a href="../view/editarPerfil_cli.php">Visitar</a>';
                }
                ?>

            </div>
        </div>
    </div>

    <div class="col s6">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title"><i class="material-icons left">shopping_basket</i><?php
                    if ($_SESSION["permissao"] == "cli") {
                        echo 'Realizar Compras';
                    } else {
                        echo 'Produtos';
                    }
                    ?></span>
                <p></p>
            </div>
            <div class="card-action">
                <?php
                if ($_SESSION["permissao"] == "cli") {
                    echo '<a href="../view/cli_buscar_super.php">Visitar</a>';
                } elseif ($_SESSION["permissao"] == "adm") {
                    echo '<a href="../view/listar_pro.php">Visitar</a>';
                } else {
                    echo '<a href="../view/listar_pro.php">Visitar</a>';
                }
                ?>
            </div>
        </div>
    </div>

    <div class="col s12">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title"><i class="material-icons left"><?php
                        if ($_SESSION["permissao"] == "adm") {
                            echo 'business';
                        } else {
                            echo 'assignment';
                        }
                        ?></i><?php
                    if ($_SESSION["permissao"] == "adm") {
                        echo 'Supermercados';
                    } elseif ($_SESSION["permissao"] == "cli") {
                        echo 'Relatório de Compras';
                    } else {
                        echo 'Pedidos';
                    }
                    ?></span>
                <p></p>
            </div>
            <div class="card-action">
                <?php
                if ($_SESSION["permissao"] == "cli") {
                    echo '<a href="../view/cli_compras.php">Visitar</a>';
                } elseif ($_SESSION["permissao"] == "adm") {
                    echo '<a href="../view/listar_sup.php">Visitar</a>';
                } else {
                    echo '<a href="../view/sup_pedidos.php">Visitar</a>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

