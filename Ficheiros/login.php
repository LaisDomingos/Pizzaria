<?php
require_once '../lib/Request.php';
$requestModel = new Request();
$ip = $requestModel->getIpAddress();
?>




<!--CAMBIE TODO ESTO POR UNO NUEVO QUE ES EL FORMULARIO DE ENCIMA PARA EL ACCESO-->

<?php
  include ('connect_db.php');

// if(isset($_POST['email']) || isset($_POST['senha'])){                 
//   if(strlen($_POST['email']) == 0){
//     echo "Preencha seu email";
//    } else if (strlen($_POST['email']) == 0){
//      echo "Preencha sua senha";
//    } else {
//      $email = $mysqli->real_escape_string($_POST['email']);
//      $senha = $mysqli->real_escape_string($_POST['senha']);
  
//      $sql_code = "SELECT * FROM users WHERE email = '$email' AND senha ='$password'";
//      $sql_query = $mysqli->query($sql_code) or die("Falha na conexão: " . $mysqli->error);
      
//      $quantidade = $sql_query->num_rows;

    
//      if($quantidade == 1){
//        $users = $sql_query->fetch_assoc();
//        if (isset($_SESSION)){
//          session_start();
//        }
//        $_SESSION['id'] = $users['id'];
//        $_SESSION['user'] = $users['user'];
        
//       if ( $_SESSION['id'] == 2){
//         header ("Location: admin.php");
//        } else{
  
//        header("Location: ../index.html");
//        }
//      } else {
//        echo "<script>alert('Falha ao logar! E-mail ou Senha incorreto');</script>";
 //     }
 //   }
 // }

  
  $geoLocationData = $requestModel->getLocation($ip);
  if ($geoLocationData['city'] != 'Covilha'){
    echo "<script>alert('Fora da área de entrega');</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link REL="SHORTCUT ICON" HREF="../imagens/favicon.ico">
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Pizzaria da Beira</title>
</head>
<body>
    <div id='barra_inicial'>
        <a href="../index.html"><img src="../imagens/ex.png" alt="Pizzaria da Beira/Logo" class="logotipo"></a>
        <h1 class="title">Pizzaria da Beira</h1>
        <a class='link' href="#"><i class="material-icons" style="font-size:55px">shopping_cart</i></a>
        <a class='link' href="login.php"><i class="material-icons" style="font-size:55px">person</i></a>
        
    </div>
    <nav id="navega" >
        <a class='link' href="promocoes.html">Promoções</a>
        <a class='link' href="menus.html">Menus</a>
        <div class="pizza">
          <a class='link' id="menu_pizza" href="pizza.html">Pizzas</a>
          <div class="pizza-menu">
            <a href="pizza.html#classicos">Clássicos</a>
            <a href="pizza.html#vegana">Veganas</a>
          </div>
        </div>
        <div class="pizza">
          <a class='link' href="entrada.html">Entradas</a>
          <div class="pizza-menu">
            <a href="entrada.html#pizzolinos">Pizzolinos</a>
            <a href="entrada.html#alho">Pão de Alho</a>
          </div>
        </div>
        <div class="pizza">
          <a class='link' href="bebida.html">Bebidas</a>
          <div class="pizza-menu">
            <a href="bebida.html#33cl">Refrigerantes 33cl</a>
            <a href="bebida.html#1L">Refrigerantes 1,5Lt</a>
          </div>
      </div>
      <div class="pizza">
        <a class='link' href="sobremesa.html">Sobremesas</a>
        <div class="pizza-menu">
          <a href="sobremesa.html#natas">Pastéis de Nata</a>
          <a href="sobremesa.html#mousse">Mousses</a>
          <a href="sobremesa.html#gelados">Gelados</a>
        </div>
      </div>
      <a class='link' href="https://www.instagram.com/pizzariabeiraubi/">Contatos</a>
    </nav>
    <table id="login" border="0">
      <td>
        <form action="validar.php" method="post">
          <fieldset class="login">
            <legend class="menutitle"><b>Login</b></legend>
            <label style="font-size: 14pt">E-mail: </label><br>
            <input class="form-group has-success"  type="text" name="mail"><br><br>
            <label style="font-size: 14pt">Senha:</label><br>
            <input type="password" name="pass"><br><br>
            <input id="botao" class="btn btn-primary" type="submit" value="Aceptar">
          </fieldset>
        </form>
      </td>
    </table>
    <footer id="rodape">
        <h4>Pizzaria da Beira © 2022</h4>
    </footer>
</body>
</html>