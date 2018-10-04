<!DOCTYPE html>
<html>
    <head>
        <?php
			include "headTop.html";
		
            include ("conexao.php");
        ?>
    </head>
    <body>
        
        <?php
			include "menuAdm.php";
		?>
  
        <div class="section"></div>
        <div class="section"></div>
    <div class="container">  
        <!-- Page Content goes here --> 
        <div class="row white darken-2">
            <div class="section"></div>
            <form class="col s8 offset-s2" action="#">
			
                <div class="row">
                    <div class="input-field">
                        <input id="busca" type="search" name="q" placeholder="nome" required>
                        <label class="label-icon" for="busca"><i class="material-icons">description</i></label>
                    </div>
                </div>
					
					<div class="row">
						<p><input class="with-gap" name="group1" type="radio" value="sup" checked /><label>Supermercados</label></p>
						<p><input class="with-gap" name="group1" type="radio" value="pro" /><label>Produtos</label></p>
					</div>	
					
						<div class="section"></div>
						
                <div class="row">
                    <button class="btn waves-effect waves-light col s6 offset-s3" type="submit" name="action" >
                        Buscar<i class="material-icons right">search</i>
                    </button>
                </div>
                <div class="section"></div>
            </form>
			
			<div class="section"></div>
            <div class="section"></div>
        </div>
        <div class="section"></div>
		<div class="section"></div>
    </div>
        
		<?php
			include "scriptsFim.php";
		?>
        
    </body>
</html>
