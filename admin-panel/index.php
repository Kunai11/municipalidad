<?php
  include('constructor.php');
  include('../cn/bdconexion.php');
  #session_start();
  if (isset($_SESSION['username'])&&($_SESSION['rank'])) {      
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
                  <li><a href="page-user.php"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
                  <li><a href="#" class="alert" style="margin:0px;"><i class="fa fa-sign-out fa-lg"></i> Cerrar Sesi&oacute;n</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <?php
        menu();
      ?>
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
            <div class="widget-small warning"><i class="icon fa fa-suitcase fa-3x"></i>
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
            <div class="widget-small fashion"><i class="icon fa fa-id-card-o fa-3x"></i>
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
            <div class="widget-small success"><i class="icon fa fa-user-circle fa-3x"></i>
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
        <?php
          widgets();
        ?>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Inducci&oacute;n</h3>
              <p style="text-align:justify;">Admin Panel es una aplicaci&oacute;n web administrativa e intuitiva que permite realizar gestiones generales para el Departamento de Recursos Humanos y especialmente, para llevar un control sobre las operaciones de pago de sueldo a los empleados de la empresa.</p>
              <p style="text-align:justify;">Para comenzar a trabajar de forma eficiente y adecuada debe:</p>
              <ol>
                <li>Crear los departamentos cargos que existan en su empresa.</li>
                <li>Registrar a los empleados actuales con sus datos correspondientes.</li>
                <li>Asignar la relacion de los empleados con sus respectivos cargos y departamentos.</li>
                <li>Crear usuarios para los empleados que sean convenientes. (Opcional)</li>
                <li>Crear o modificar las planillas de pago para cada cargo existente.</li>
                <li>Registrar los nuevos pagos que se han realizado.</li>
                <li>Revisar el historial de pagos para comprobar que todo va correctamente.</li>
              </ol>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Obtener Admin Panel</h3>
              <p>Hasta ahora Admin Panel se puede encontrar de forma gratuita bajo la licencia MIT.</p>
              <p>Si desea obtener la versi&oacute;n actual o su codigo fuente, puede encontrarla en <a href="https://github.com/Kunai11/municipalidad" target="_blank">GitHub</a> o si desea contribuir en el desarrollo de Admin Panel realice un Pull Request en la direcci&oacute;n del repositorio.</p>
              <p>Si ha tenido un problema, por favor, env&iacute;elo como un issue a <a href="https://github.com/Kunai11/municipalidad" target="_blank">GitHub</a>.</p>
              <p class="mt-40 mb-20"><a class="btn btn-primary icon-btn mr-10" href="../en-construccion/" target="_blank"><i class="fa fa-file"></i>Documentaci&oacute;n</a><a class="btn btn-info icon-btn mr-10" href="https://github.com/Kunai11/municipalidad" target="_blank"><i class="fa fa-github"></i>GitHub</a><a class="btn btn-success icon-btn" href="https://github.com/Kunai11/municipalidad/archive/master.zip" target="_blank"><i class="fa fa-download"></i>Download</a></p>
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
    <script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript">
      $('.alert').click(function(){
      	swal({
      		title: "Esta seguro?",
      		text: "Esta opcion cerrara la sesion actual",
      		type: "warning",
      		showCancelButton: true,
      		confirmButtonText: "Si, salir",
      		cancelButtonText: "No, mantener conectado",
      		closeOnConfirm: true,
      		closeOnCancel: true
      	}, function(isConfirm) {
      		if (isConfirm) {
            $(location).attr('href', 'logout.php');
            //$('#alert').html.attr('href', 'logout.php');
      			//swal("Deleted!", "Your imaginary file has been deleted.", "success");
      		} else {
            //return false;
      			//swal("Cancelled", "Your imaginary file is safe :)", "error");
      		}
      	});
      });
    </script>
  </body>
</html>
<?php
    }else {
        header('location: page_denegado.php');
    }
?>