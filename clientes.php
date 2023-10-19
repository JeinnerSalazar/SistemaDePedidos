<!doctype html>
<html lang="en" data-bs-theme="auto">
  <?php require_once('conexion.php')?>
  <?php require_once('bloqueo.php')?>
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
        <h1 class="h2">Clientes</h1>
      </div>
      <?php require_once("bloques/clientes/formulario.php"); ?>
      <br>
      <?php 
        if(isset($_GET['id_cliente']) && $_GET['id_cliente'] > 0){
          require_once("bloques/clientes/editar.php");
        }else{
          require_once("bloques/clientes/consultar.php"); 
        }
        ?>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

    </main>
  
  </div>
</div>
</body>
<script src="/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="js/funciones.js"></script>
</html>
