<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Sistema de pedidos</a>
      
<spam style="color: white;">
<a align-items-center>

        <!-- Informacion Usuario -->
      Bienvenido <?php echo $user['nombre']; ?> - Estado: 
      <?php 
      switch ($user['estado']){
        case 1:
          echo "ACTIVO";
          break;
        case 0:
          echo "NO ACTIVO"; 
          break;
      }
      ?>
      </spam>     
    </header>

<div class="container-fluid">
  <div class="row">
    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Inicio</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="inicio.php">
                <svg class="bi"><use xlink:href="#house-fill"/></svg>
                Inicio
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="pedidos.php">
                <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                Pedidos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="productos.php">
                <svg class="bi"><use xlink:href="#cart"/></svg>
                Productos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="clientes.php">
                <svg class="bi"><use xlink:href="#people"/></svg>
                Clientes
              </a>
            </li>
          </ul>

          <hr class="my-3">
          <ul class="nav flex-column mb-auto">
          <?php
              if($user['perfil'] == "Administrador"){

              ?>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="usuarios.php">
                <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
                Configuracion de usuarios
              </a>
            </li> 
            <?php } ?>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="salir.php">
                <svg class="bi"><use xlink:href="#door-closed"/></svg>
                Salir
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>