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
		<h2 class="menutitle"> Administração de Usuários registrados</h2>	
		<div>
		<hr/>
		<h4 class="menutitle">Edição de Usuários</h4>
		<div>
		
		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM login WHERE id=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
		    	$pass=$row[2];
		    	$email=$row[3];
		    	$pasadmin=$row[4];
		    }



		?>
	
			<form action="ejecutaactualizar.php" method="post">
			
				Id:<br>
				<input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br><br>
				Usuário:<br> 
				<input type="text" name="user" value="<?php echo $user?>"><br><br>
				Password usuário:<br>
				<input type="text" name="pass" value="<?php echo $pass?>"><br><br>
				Email usuário:<br> 
				<input type="text" name="email" value="<?php echo $email?>"><br><br>
				Password administrador:<br> 
				<input type="text" name="pasadmin" value="<?php echo $pasadmin?>"><br><br>
				<br>
				<input id="botao" type="submit" value="Guardar">
			
			</form>
		

				  
		
		
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
<hr />
<footer id="rodape">
        <h4>Pizzaria da Beira © 2022</h4>
    </footer>
</div><!-- /container -->


	</style>
  </body>
</html>


