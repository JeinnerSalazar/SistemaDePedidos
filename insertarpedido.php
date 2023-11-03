<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php require_once('conexion.php')?>
<?php require_once('bloqueo.php')?>

<?php
    $control = $_GET['control'];

    switch($control){
        //Si llega 0 es por que hay un nuevo pedido
        case 0;
            $_SESSION['productos'] = array();
            $_SESSION['referencias'] = array();
            $_SESSION['cantidades'] = array();
            break;
        
        case 1;
            array_push($_SESSION['productos'], $_POST['producto']);
            array_push($_SESSION['cantidades'], $_POST['cantidad']);

            $conpedido = "SELECT * from productos where id_producto = ". $_POST['producto'];
            $respedido = mysqli_query($conexion, $conpedido) or die ('No consulto pedido');
            $pedido = mysqli_fetch_array($respedido);

            array_push($_SESSION['referencias'], $_POST['referencia']);

            //Organizo para almacenar en base de datos

            $productos = serialize($_SESSION['productos']);
            $referencias = serialize($_SESSION['referencias']);
            $cantidades = serialize($_SESSION['cantidades']);
            break;

        case 2;
          if(isset($_POST['boton2'])) {
          $producto = $_POST['productos'];
          // $referencia = $_POST['referencias'];
          $cantidad = $_POST['cantidades'];
          
          
  
          $insertar = "INSERT into pedidos(producto, cantidad) values ('$producto', '$cantidad')";
  
          mysqli_query($conexion, $insertar) or die ('No inserto pedido');
  
          header("location: pedidos.php");
      }
          break;
    }

?>

<head><script src="js/color-modes.js"></script>
    <head><script src="js/bootstrap/"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Sistema de pedidos</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/inicio.css" rel="stylesheet">
  </head>
  <body>

<?php require_once('partes/cabecera.php')?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pedidos</h1>
      </div>

    <div class="row">
      <div class="col-lg-4">
        <?php require_once('bloques/pedidos/formulario.php');?>
      </div>

      <div class="col-lg-8">
        <?php require_once('bloques/pedidos/verpedidos.php');?>
      </div>
  </div>
      <br><br>
      <hr>
      <button class="btn btn-primary" id = "continuar" onclick="verformulariopedido()">Continuar pedido</button>

         <?php require_once('bloques/pedidos/formulario2.php');?>

           <!-- <pre>
           <?php
           print_r($_SESSION['productos']);
           echo "<br><br>";
           print_r($_SESSION['referencias']);
           echo "<br><br>";
           print_r($_SESSION['cantidades']);
           echo "<br><br>";
           ?>
           </pre> -->         
</main>
  
  </div>
</div>
</body>
<script>
  function verformulariopedido() {
    document.getElementById('formpedido').style.display = "block";
    document.getElementById('continuar').style.display = "none";
  }
  </script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="js/funciones.js"></script>
</html>