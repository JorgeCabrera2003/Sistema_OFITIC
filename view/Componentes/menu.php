<!-- Sidebar -->
<aside id="sidebar" class="sidebar">
  <div class="sidebar-header">
    <h1 class="logo">
      <img src="assets/img/logo.jpg" style="width: 1.5em; border-radius: 2px" alt="Logo" class="img-logo">
      <span class="ms-2">OFITIC</span>
    </h1>
    <button id="collapse-btn" class="collapse-btn">
      <i class="fas fa-chevron-left"></i>
    </button>
  </div>

  <div class="sidebar-content">
    <nav class="sidebar-menu">
      <ul>
        <li class="menu-item <?php echo ($page == "home") ? "active" : "" ?>">
          <a href="?page=home">
            <i class="fas fa-home"></i>
            <span class="menu-text">Dashboard</span>
          </a>
        </li>
        <li class="menu-item <?php echo ($page == "mis_servicios") ? "active" : "" ?>">
          <a href="?page=mis_servicios">
            <i class="fa-solid fa-list-check"></i>
            <span class="menu-text">Mis Servicios</span>
          </a>
        </li>

        <?php if ($datos["rol"] == "Super usuario" or $datos["rol"] == "Técnico") { ?>
          <li class="menu-item <?php echo ($page == "servicios") ? "active" : "" ?>">
            <a href="?page=servicios">
              <i class="fa-solid fa-clipboard-check"></i>
              <span class="menu-text">Servicios</span>
            </a>
          </li>
        <?php } ?>

        <?php if ($datos["rol"] == "Super usuario" or $datos["rol"] == "Administrador") { ?>

          <li class="menu-item <?php echo ($page == "solicitudes") ? "active" : "" ?>">
            <a href="?page=solicitudes">
              <i class="fa-solid fa-clipboard-list"></i>
              <span class="menu-text">Solicitudes</span>
            </a>
          </li>
          <li class="menu-item <?php echo ($page == "gestion_equipos") ? "active" : "" ?>">
            <a href="?page=gestion_equipos">
              <i class="fa-solid fa-computer"></i>
              <span class="menu-text">Equipos</span>
            </a>
          </li>
          <li class="menu-item <?php echo ($page == "solicitantes") ? "active" : "" ?>">
            <a href="?page=solicitantes">
              <i class="fa-solid fa-address-book"></i>
              <span class="menu-text">Gestión de solicitantes</span>
            </a>
          </li>

        <?php } ?>


        <!-- <li class="menu-item">
          <a href="#">
            <i class="fas fa-chart-bar"></i>
            <span class="menu-text">Analytics</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#">
            <i class="fas fa-building"></i>
            <span class="menu-text">Organization</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#">
            <i class="fas fa-folder"></i>
            <span class="menu-text">Projects</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#">
            <i class="fas fa-wallet"></i>
            <span class="menu-text">Transactions</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#">
            <i class="fas fa-receipt"></i>
            <span class="menu-text">Invoices</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#">
            <i class="fas fa-credit-card"></i>
            <span class="menu-text">Payments</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#">
            <i class="fas fa-users"></i>
            <span class="menu-text">Usuarios</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#">
            <i class="fas fa-shield-alt"></i>
            <span class="menu-text">Permissions</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#">
            <i class="fas fa-comment"></i>
            <span class="menu-text">Chat</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#">
            <i class="fas fa-video"></i>
            <span class="menu-text">Meetings</span>
          </a>
        </li> -->

      </ul>
    </nav>
  </div>

  <div class="sidebar-footer">
    <ul>

      <?php if ($datos["rol"] == "Super usuario") { ?>

        <li class="menu-item <?php echo ($page == "Configuracion") ? "active" : "" ?>">
          <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
            <i class="fas fa-cog"></i>
            <span class="menu-text">Configuración</span>
            <i class="fa-solid fa-angle-right"></i>
          </a>
        </li>

        <ul id="icons-nav" style="margin-left: 1em;" class="nav-content <?php echo ($page == "Configuracion") ? "" : "collapse" ?>" data-bs-parent="#sidebar-nav">

          <li class="menu-item <?php echo (isset($_GET['dato']) && $_GET['dato'] == "unidad") ? "active" : "" ?>">
            <a href="?page=Configuracion&dato=unidad">
              <i class="fas fa-cog"></i>
              <span class="menu-text">Unidad</span>
            </a>
          </li>
          <li class="menu-item <?php echo (isset($_GET['dato']) && $_GET['dato'] == "dependencia") ? "active" : "" ?>">
            <a href="?page=Configuracion&dato=dependencia">
              <i class="fas fa-cog"></i>
              <span class="menu-text">Dependencia</span>
            </a>
          </li>
          <li class="menu-item <?php echo (isset($_GET['dato']) && $_GET['dato'] == "marca") ? "active" : "" ?>">
            <a href="?page=Configuracion&dato=marca">
              <i class="fas fa-cog"></i>
              <span class="menu-text">Marca</span>
            </a>
          </li>

        </ul>

      <?php } ?>

      <li class="menu-item <?php echo ($page == "ayuda") ? "active" : "" ?>">
        <a href="?page=ayuda">
          <i class="fas fa-question-circle"></i>
          <span class="menu-text">Ayuda</span>
        </a>
      </li>
      
    </ul>
  </div>
</aside>

<!-- Main Content -->
<div class="main-content">
  <!-- Header/Top Navigation -->
  <header class="top-nav">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-auto d-lg-none">
          <button id="sidebar-toggle" class="sidebar-toggle">
            <i class="fas fa-bars" style="pointer-events: none;"></i>
          </button>
        </div>

        <div class="col d-none d-md-block">
          <nav class="breadcrumb-nav">
            <a href="#" class="breadcrumb-item">Home</a>
            <span class="breadcrumb-separator">/</span>
            <a href="#" class="breadcrumb-item">Dashboard</a>
          </nav>
        </div>

        <div class="col-auto ms-auto">
          <div class="top-nav-actions">
            <div class="action-item notification-dropdown">
              <button class="notification-btn">
                <i class="fas fa-bell"></i>
                <span class="notification-badge"></span>
              </button>
              <div class="dropdown-menu notification-menu">
                <div class="dropdown-header">
                  <h6>Notifications</h6>
                  <button class="close-dropdown">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <div class="dropdown-body">
                  <div class="notification-item">
                    <div class="notification-icon info">
                      <i class="fas fa-info"></i>
                    </div>
                    <div class="notification-content">
                      <p class="notification-title">New Feature</p>
                      <p class="notification-text">
                        Check out our new budget tracking tool!
                      </p>
                      <p class="notification-time">2 hours ago</p>
                    </div>
                  </div>
                  <div class="notification-item">
                    <div class="notification-icon warning">
                      <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="notification-content">
                      <p class="notification-title">Account Alert</p>
                      <p class="notification-text">
                        Unusual activity detected on your account.
                      </p>
                      <p class="notification-time">1 day ago</p>
                    </div>
                  </div>
                  <div class="notification-item">
                    <div class="notification-icon danger">
                      <i class="fas fa-credit-card"></i>
                    </div>
                    <div class="notification-content">
                      <p class="notification-title">Payment Due</p>
                      <p class="notification-text">
                        Your credit card payment is due in 3 days.
                      </p>
                      <p class="notification-time">3 days ago</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="action-item">
              <button id="theme-toggle" class="theme-toggle">
                <i class="fas fa-moon dark-icon"></i>
                <i class="fas fa-sun light-icon"></i>
              </button>
            </div>

            <div class="action-item user-dropdown">
              <button class="user-dropdown-toggle">
                <div class="avatar">
                  <img
                    src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/38184074.jpg-M4vCjTSSWVw5RwWvvmrxXBcNVU8MBU.jpeg"
                    alt="User Avatar" />
                </div>
              </button>
              <div class="dropdown-menu user-menu">
                <div class="dropdown-header">
                  <h6><?php echo $datos["nombre"]." ".$datos["apellido"]; ?></h6>
                  <span><?php echo $datos["unidad"]."/".$datos["dependencia"]; ?></span>
                </div>
                <div class="dropdown-body">
                  <ul>
                    <li class="menu-item <?php echo ($page == "users-profile") ? "active" : "" ?>">
                      <a href="?page=users-profile">
                        <i class="fas fa-question-circle"></i>
                        <span class="menu-text">Perfil</span>
                      </a>
                    </li>

                    <li class="menu-item">
                      <a href="?page=closet">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                        <span class="menu-text">Cerrar Sesión</span>
                      </a>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <?php if (isset($msg)) require_once("alert.php");?>

  <!-- Page Content -->
  <main class="page-content" style="flex: 1;">