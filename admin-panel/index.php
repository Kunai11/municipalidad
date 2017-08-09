<?php
  include('../cn/bdconexion.php');
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <!--<link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Admin Panel</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.php">Admin Panel</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <!--<li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="dropdown-menu">
                  <li class="not-head">You have 4 new notifications.</li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li class="not-footer"><a href="#">See all notifications.</a></li>
                </ul>
              </li>-->
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <!--<li><a href="page-user.php"><i class="fa fa-cog fa-lg"></i> Settings</a></li>-->
                  <li><a href="page-user.php"><i class="fa fa-user fa-lg"></i> Editar Perfil</a></li>
                  <li><a href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Cerrar Sesi&oacute;n</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="images/user.png" alt="User Image"></div>
            <div class="pull-left info">
              <?php
                echo "
                  <p>".$_SESSION['username']."</p>
                  <p class='designation'>".$_SESSION['rank']."</p>
                ";
              ?>
            </div>
          </div>

          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="index.php"><i class="fa fa-home"></i><span>Inicio</span></a></li>

            <li class="treeview"><a href="#"><i class="fa fa-institution"></i><span>Opciones Administrativas</span><i class="fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
              <li class="treeview"><a href="#"><i class="fa fa-group"></i><span>Empleados</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="agregar_empleado.php"><i class="fa fa-plus-square"></i> Agregar nuevo</a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>
                  <li><a href="#"><i class="fa fa-minus-square"></i> Eliminar existente</a></li>
                </ul>
              </li>
                
              <li class="treeview"><a href="#"><i class="fa fa-suitcase"></i><span>Departamentos</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href=""><i class="fa fa-plus-square"></i> Agregar nuevo</a></li>
                  <li><a href=""><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>
                  <li><a href=""><i class="fa fa-minus-square"></i> Eliminar existente</a></li>
                </ul>
              </li>

              <li class="treeview"><a href="#"><i class="fa fa-id-card-o"></i><span>Cargos</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href=""><i class="fa fa-plus-square"></i> Crear y asignar cargo</a></li>
                  <li><a href=""><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>
                  <li><a href=""><i class="fa fa-minus-square"></i> Eliminar existente</a></li>
                </ul>
              </li>
            </ul>

            <li class="treeview"><a href="#"><i class="fa fa-money"></i><span>Opciones Financieras</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li class="treeview"><a href="#"><i class="fa fa-dollar"></i><span>Pagos</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="pagos_crear.php"><i class="fa fa-credit-card"></i> Nuevo pago</a></li>
                  <li><a href="pagos_modificar.php"><i class="fa fa-pencil-square-o"></i> Modificar pago</a></li>
                </ul>
                <li class="treeview"><a href="#"><i class="fa fa-clipboard"></i><span>Registro</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="pagos_historial.php"><i class="fa fa-history"></i> Historial</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-user-circle"></i><span>Gesti&oacute;n de Usuarios</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="usuarios_crear.php"><i class="fa fa-user-plus"></i> Crear Usuario</a></li>
                <li><a href="usuarios_modificar.php"><i class="fa fa-pencil-square-o"></i> Modificar Usuario</a></li>
                <li><a href="usuarios_eliminar.php"><i class="fa fa-user-times"></i> Eliminar Usuario</a></li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-clipboard"></i><span>Reportes</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="listado_dep.php"><i class="fa fa-file-text-o"></i> Listado de Departamentos</a></li>
                <li><a href="listado_cargos.php"><i class="fa fa-file-text-o"></i> Listado de Cargos</a></li>
                <li><a href="listado_empleados.php"><i class="fa fa-file-text-o"></i> Listado de Empleados</a></li>
                <li><a href="listado_usuarios.php"><i class="fa fa-file-text-o"></i> Listado de Usuarios</a></li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-search"></i><span>Busqueda</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="buscar_dep.php"><i class="fa fa-search"></i> Buscar Departamento</a></li>
                <li><a href="buscar_cargo.php"><i class="fa fa-search"></i> Buscar Cargo</a></li>
                <li><a href="buscar_empleado.php"><i class="fa fa-search"></i> Buscar Empleado</a></li>
                <li><a href="buscar_usuario.php"><i class="fa fa-search"></i> Buscar Usuario</a></li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-gears"></i><span>Configuraci&oacute;n</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li class="treeview"><a href="#"><i class="fa fa-wpforms"></i><span>Planillas predefinidas</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="planillas_crear.php"><i class="fa fa-plus-square"></i> Crear nueva</a></li>
                  <li><a href="planillas_modificar.php"><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>
                  <li><a href="planillas_eliminar.php"><i class="fa fa-minus-square"></i> Eliminar existente</a></li>
                  <li><a href="planillas_listado_completo.php"><i class="fa fa-wpforms"></i> Ver Listado Completo</a></li>
                </ul>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-lock"></i><span>Sesi&oacute;n</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="page-user.php"><i class="fa fa-user"></i> Editar Perfil</a></li>
                <li><a href="page-login.php"><i class="fa fa-exit"></i> Cerrar Sesi&oacute;n</a></li>
              </ul>
            </li>
            <!-- Codigo Innecesario
            <li><a href="charts.html"><i class="fa fa-pie-chart"></i><span>Charts</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Forms</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="form-components.html"><i class="fa fa-circle-o"></i> Form Components</a></li>
                <li><a href="form-custom.html"><i class="fa fa-circle-o"></i> Custom Components</a></li>
                <li><a href="form-samples.html"><i class="fa fa-circle-o"></i> Form Samples</a></li>
                <li><a href="form-notifications.html"><i class="fa fa-circle-o"></i> Form Notifications</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Tables</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="table-basic.html"><i class="fa fa-circle-o"></i> Basic Tables</a></li>
                <li><a href="table-data-table.html"><i class="fa fa-circle-o"></i> Data Tables</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="blank-page.php"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                <li><a href="page-login.php"><i class="fa fa-circle-o"></i> Login Page</a></li>
                <li><a href="page-lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen Page</a></li>
                <li><a href="page-user.php"><i class="fa fa-circle-o"></i> User Page</a></li>
                <li><a href="page-invoice.html"><i class="fa fa-circle-o"></i> Invoice Page</a></li>
                <li><a href="page-calendar.html"><i class="fa fa-circle-o"></i> Calendar Page</a></li>
                <li><a href="page-mailbox.html"><i class="fa fa-circle-o"></i> Mailbox</a></li>
                <li><a href="page-error.php"><i class="fa fa-circle-o"></i> Error Page</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Multilevel Menu</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="blank-page.php"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i><span> Level One</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="blank-page.php"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i><span> Level Two</span></a></li>
                  </ul>
                </li>
              </ul>
            </li>
            -->
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-home"></i> Inicio</h1>
            <p>Pantalla de inicio de Admin Panel</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Inicio</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
              <div class="info">
                <h4>Empleados</h4>
                <?php
                  $queryContarEmpleados=mysqli_query($db, "SELECT COUNT(*) as Cantidad FROM empleados WHERE Estado='Activo'") or die(mysqli_error);
                  $rowContarEmpleados = mysqli_fetch_array($queryContarEmpleados);
                  echo '
                    <p><b>'.$rowContarEmpleados['Cantidad'].'</b></p>
                  ';
                ?>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="widget-small info"><i class="icon fa fa-suitcase fa-3x"></i>
              <div class="info">
                <h4>Depart.</h4>
                <?php
                  $queryContarDepartamentos=mysqli_query($db, "SELECT COUNT(*) as Cantidad FROM departamentos") or die(mysqli_error);
                  $rowContarDepartamentos = mysqli_fetch_array($queryContarDepartamentos);
                  echo '
                    <p><b>'.$rowContarDepartamentos['Cantidad'].'</b></p>
                  ';
                ?>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="widget-small warning"><i class="icon fa fa-id-card-o fa-3x"></i>
              <div class="info">
                <h4>Cargos</h4>
                <?php
                  $queryContarCargos=mysqli_query($db, "SELECT COUNT(*) as Cantidad FROM cargos") or die(mysqli_error);
                  $rowContarCargos = mysqli_fetch_array($queryContarCargos);
                  echo '
                    <p><b>'.$rowContarCargos['Cantidad'].'</b></p>
                  ';
                ?>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="widget-small danger"><i class="icon fa fa-star fa-3x"></i>
              <div class="info">
                <h4>Usuarios</h4>
                <?php
                  $queryContarUsuarios=mysqli_query($db, "SELECT COUNT(*) as Cantidad FROM usuarios WHERE Estado='Activo'") or die(mysqli_error);
                  $rowContarUsuarios = mysqli_fetch_array($queryContarUsuarios);
                  echo '
                    <p><b>'.$rowContarUsuarios['Cantidad'].'</b></p>
                  ';
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Getting Started</h3>
              <p>Vali is a free and responsive dashboard theme built with Bootstrap, Pug.js (templating) and SASS. It's fully customizable and modular. You don't need to add the code, you will not use.</p>
              <p>The issue with the most admin themes out there is that if you will see their source code there are a hell lot of external CSS and javascript files in there. And if you try to remove a CSS or Javascript file some things stops working.</p>
              <p>That's why I made Vali. Which is a light weight yet expendable and good looking theme. The theme has all the features required in a dashboard theme but this features are built like plug and play module. Take a look at the <a href="http://pratikborsadiya.in/blog/vali-admin" target="_blank">documentation</a> about customizing the theme.</p>
              <p class="mt-40 mb-20"><a class="btn btn-primary icon-btn mr-10" href="http://pratikborsadiya.in/blog/vali-admin" target="_blank"><i class="fa fa-file"></i>Docs</a><a class="btn btn-info icon-btn mr-10" href="https://github.com/pratikborsadiya/vali-admin" target="_blank"><i class="fa fa-github"></i>GitHub</a><a class="btn btn-success icon-btn" href="https://github.com/pratikborsadiya/vali-admin/archive/master.zip" target="_blank"><i class="fa fa-download"></i>Download</a></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Compatibility with frameworks</h3>
              <p>This theme is not built for a specific framework or technology like Angular or React etc. But due to it's modular nature it's very easy to incorporate it into any front-end or back-end framework like Angular, React or Laravel.</p>
              <p>Go to <a href="http://pratikborsadiya.in/blog/vali-admin" target="_blank">documentation</a> for more details about integrating this theme with various frameworks.</p>
              <p>The source code is available on GitHub. If anything is missing or weird please report it as an issue on <a href="https://github.com/pratikborsadiya/vali-admin" target="_blank">GitHub</a>. If you want to contribute to this theme pull requests are always welcome.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>