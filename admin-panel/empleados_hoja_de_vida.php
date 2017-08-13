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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
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
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
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
        <div class="page-title hidden-print">
          <div>
            <h1><i class="fa fa-file-text-o"></i> Hoja de Vida</h1>
            <p>Detalles completos del empleado solicitado</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Hoja de Vida</a></li>
            </ul>
          </div>
        </div>
        <?php
          //if (($_SESSION['username']!="RootUser")) {
            $queryDatosEmp = mysqli_query($db, "SELECT * FROM empleados WHERE Id_Empleado='".$_GET['Id_Empleado']."'") or die(mysqli_error());
            $rowQueryDatosEmp=mysqli_fetch_array($queryDatosEmp); 
            $Id_Empleado = $rowQueryDatosEmp['Id_Empleado'];
            $Nombres = $rowQueryDatosEmp['Nombres'];
            $Apellido1 = $rowQueryDatosEmp['Apellido1'];
            $Apellido2 = $rowQueryDatosEmp['Apellido2'];
            $Lugar_Nac = $rowQueryDatosEmp['Lugar_Nac'];
            $Fecha_Nac = $rowQueryDatosEmp['Fecha_Nac'];
            $Profesion = $rowQueryDatosEmp['Profesion'];
            $Domicilio = $rowQueryDatosEmp['Domicilio'];
            $Telefono = $rowQueryDatosEmp['Telefono'];
            $Fecha_Ingreso = $rowQueryDatosEmp['Fecha_Ingreso'];
            $Correo = $rowQueryDatosEmp['Correo'];
            $Nombre_Emergencia = $rowQueryDatosEmp['Nombre_Emergencia'];
            $Numero_Emergencia = $rowQueryDatosEmp['Numero_Emergencia'];
          //}
        ?>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <section class="invoice">
                <div class="row">
                  <div class="col-xs-12">
                    <!--<div class="col-md-12">-->
                      <div class="profile">
                        <div class="info" align="center">
                          <img class="user-img" src="images/user.png">
                          <h4><?php echo $Nombres . " " . $Apellido1; ?></h4>
                          <p><?php echo $Profesion; ?></p>
                        </div>
                        <!--<div class="cover-image"></div>-->
                      </div>
                    <!--</div>-->
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-xs-12 table-responsive">
                    <table class="table table-condensed">
                      <thead>
                        <tr>
                          <th class="col-md-6" style="text-align:right;"><h5>Datos Personales</h5></th>
                          <th class="col-md-6"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr >
                          <td>&nbsp;&nbsp;&nbsp;N&uacute;mero de Identidad:</td>
                          <td><?php echo $Id_Empleado; ?></td>
                        </tr>
                        <tr>
                          <td>&nbsp;&nbsp;&nbsp;Nombre Completo:</td>
                          <td><?php echo $Nombres . " " . $Apellido1 . " " .$Apellido2 ; ?></td>
                        </tr>
                        <tr>
                          <td>&nbsp;&nbsp;&nbsp;Fecha de Nacimiento:</td>
                          <td><?php echo $Fecha_Nac; ?></td>
                        </tr>
                        <tr>
                          <td>&nbsp;&nbsp;&nbsp;Lugar de Nacimiento:</td>
                          <td><?php echo $Lugar_Nac; ?></td>
                        </tr>
                      </tbody>
                    </table>
                  
                    <table class="table table-condensed">
                      <thead>
                        <tr>
                          <th class="col-md-6" style="text-align:right;"><h5>Datos De Contacto</h5></th>
                          <th class="col-md-6"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr >
                          <td>&nbsp;&nbsp;&nbsp;Domicilio:</td>
                          <td><?php echo $Domicilio; ?></td>
                        </tr>
                        <tr>
                          <td>&nbsp;&nbsp;&nbsp;N&uacute;mero de tel&eacute;fono:</td>
                          <td><?php echo $Telefono; ?></td>
                        </tr>
                        <tr>
                          <td>&nbsp;&nbsp;&nbsp;Direcci&oacute;n de correo:</td>
                          <td><?php echo $Correo; ?></td>
                        </tr>
                        <tr>
                          <td style="text-align:right;"><h5>En caso de emergencia</h5></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>&nbsp;&nbsp;&nbsp;Nombre de contacto:</td>
                          <td><?php echo $Nombre_Emergencia; ?></td>
                        </tr>
                        <tr>
                          <td>&nbsp;&nbsp;&nbsp;N&uacute;mero de contacto:</td>
                          <td><?php echo $Numero_Emergencia; ?></td>
                        </tr>
                      </tbody>
                    </table>
                  
                    <table class="table table-condensed">
                      <thead>
                        <tr>
                          <th class="col-md-6" style="text-align:right;"><h5>Datos De Inter&eacute;s</h5></th>
                          <th class="col-md-6"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>&nbsp;&nbsp;&nbsp;Profesi&oacute;n:</td>
                          <td><?php echo $Profesion; ?></td>
                        </tr>
                        <tr>
                          <td>&nbsp;&nbsp;&nbsp;Fecha de Contrataci&oacute;n:</td>
                          <td><?php echo $Fecha_Ingreso; ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row hidden-print mt-20">
                  <div class="col-xs-12 text-right"><a class="btn btn-primary" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Imprimir</a></div>
                </div>
              </section>
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
    <script type="text/javascript">$('body').removeClass("sidebar-mini").addClass("sidebar-collapse");</script>
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