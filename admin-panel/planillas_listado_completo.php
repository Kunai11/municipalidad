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
    <link rel="icon" type="image/png" href="images/paper-airplane.png" />     <title>Admin Panel</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
    <style>
      @media print {
      .no-impr {display:none}
      }
    </style>
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
            <h1><i class="fa fa-wpforms"></i> Listado de Planillas</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-gears fa-lg"></i></li>
              <li>Planillas de pago</li>
              <li class="active"><a href="#"> Ver Listado Completo</a></li>
            </ul>
          </div>
          <div><!--<a class="btn btn-primary btn-flat" href="#"><i class="fa fa-lg fa-plus"></i></a>--><a class="btn btn-info btn-flat no-impr" href="planillas_listado_completo.php"><i class="fa fa-lg fa-refresh"></i></a><a class="btn btn-warning btn-flat" href="javascript:window.print();"><i class="fa fa-lg fa-print"></i></a></div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>C&oacute;digo</th>
                      <th>Descripci&oacute;n</th>
                      <th>Tipo</th>
                      <th>Sueldo Base</th>
                      <th>Deducci&oacute;n IHSS (%)</th>
                      <th>Deducciones Especiales (%)</th>
                      <th>Sueldo Neto</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $queryFullPlanillas=mysqli_query($db, "SELECT * FROM planillas") or die(mysqli_error());
                      while ($rowPlanilla=mysqli_fetch_array($queryFullPlanillas)) {
                        $queryTipo=mysqli_query($db, "SELECT Nom_Cargo FROM cargos WHERE Cod_Cargo='".$rowPlanilla['Tipo']."'") or die(mysqli_error());
                        $rowTipo=mysqli_fetch_array($queryTipo);
                        echo '
                          <tr>
                            <td>'.$rowPlanilla['Cod_Planilla'].'</td>
                            <td>'.$rowPlanilla['Descripcion'].'</td>
                            <td>'.$rowTipo['Nom_Cargo'].'</td>
                            <td>'.$rowPlanilla['Sueldo_Base'].'</td>
                            <td>'.$rowPlanilla['Ded_IHSS'].'</td>
                            <td>'.$rowPlanilla['Ded_Especiales'].'</td>
                            <td>'.$rowPlanilla['Salario_Neto'].'</td>
                          </tr>
                        ';
                      }
                    ?>
                  </tbody>
                </table>
              </div>
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
    <script language="javascript"> 
      function refresh() {
        window.setTimeout('location.href="planillas_listado_completo.php"', 1);
      }
    </script>
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
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