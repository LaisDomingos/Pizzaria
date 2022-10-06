<!DOCTYPE html>
<?php
session_start();

?>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link REL="SHORTCUT ICON" HREF="../imagens/favicon.ico">
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Pizzaria da Beira - Página de Administrador</title>
	<link href=".css" rel="stylesheet"/>

  </head>
<body>
<div id='barra_inicial'>
        <a href="../index.html"><img src="../imagens/ex.png" alt="Pizzaria da Beira/Logo" class="logotipo"></a>
        <h1 class="title">Pizzaria da Beira</h1>
        
</div>
<nav id="navega" >
	<a class="link" href="admin.php">Administrador do Sítio</a>
	<a class="link" href="">Bem vindo<strong><?php echo $_SESSION['user'];?></strong> </a>
	<a class="link" href="desconectar.php"> Encerrar Sessão </a>
</nav>
<div>
<header>
<div>

</div>
</header>

  <!-- Navbar
    ================================================== -->


<!-- ======================================================================================================================== -->
<div>
	
	
		
	<div>

		<div>
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2 class="menutitle"> Administração de usuários registrados</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4 class="menutitle">Tabela de Usuários</h4>
		<div class="row-fluid">
		



			<?php

				require("connect_db.php");
				$sql=("SELECT * FROM login");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table id='menu' class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td class='menutd'>Id</td>";
						echo "<td class='menutd'>Usuários</td>";
						echo "<td class='menutd'>Password</td>";
						echo "<td class='menutd'>E-mail</td>";
						echo "<td class='menutd'>Password del administrador</td>";
						echo "<td class='menutd'>Editar</td>";
						echo "<td class='menutd'>Borrar</td>";
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td class='menuadmin'>$arreglo[0]</td>";
				    	echo "<td class='menuadmin'>$arreglo[1]</td>";
				    	echo "<td class='menuadmin'>$arreglo[2]</td>";
				    	echo "<td class='menuadmin'>$arreglo[3]</td>";
				    	echo "<td class='menuadmin'>$arreglo[4]</td>";

				    	echo "<td class='menuadmin'><a href='actualizar.php?id=$arreglo[0]'><img src='../Imagens/actualizar.gif'></td>";
						echo "<td class='menuadmin'><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='../Imagens/eliminar.png'></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM login WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='admin.php'</script>";
					}

			?>
			
				  
			  			  
			  
		
		
		<div>
		
		</div>	
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->

<footer id="rodape">
        <h4>Pizzaria da Beira © 2022</h4>
    </footer>
</div><!-- /container -->


	</style>
	
  </body>
</html>