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
            <h1><i class="fa fa-pencil-square-o"></i> Modificar Pago</h1>
            <p>Modificar un pago realizado anteriormente</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-money fa-lg"></i></li>
              <li>Pagos</li>
              <li><a href="#">Modificar Pago</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-title">
                <h3 class="card-title" align="center">Seleccionar el Pago</h3>
              </div>
              <div class="card-body">
                <form class="col-md-12" method="GET" action="pagos_crear.php" id="formBuscar">
                  <br>
                  <div class="col-md-12" >                    
                    
                    <div class="form-group col-md-6">
                      <label class="control-label">Id de Pago</label>
                      <select class="form-control" id="codigo_historial_modificar">
                        <?php 
                          $queryListaHistorial=mysqli_query($db, "SELECT * FROM historial") or die(mysqli_error());
                          while ($rowHistorial=mysqli_fetch_array($queryListaHistorial)) {
                              echo '<option value="'.$rowHistorial['Id_Pago'].'">'.$rowHistorial['Id_Pago'].'</option>';  
                          }
                        ?>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="control-label">Empleado</label>   
                        <input class="form-control col-md-6" type="text" name="tip_emp" id="tip_emp" placeholder="Nombre del Empleado" value="" disabled>
                    </div>

                  </div>
                </form>
              </div>
              <div class="card-footer" align="center">
                <br><br><br><br>
                <!--<button class="btn btn-primary icon-btn" type="submit" form="formBuscar" id="buscar" name="buscar"><i class="fa fa-fw fa-lg fa-check-circle"></i>Buscar</button>
                &nbsp;&nbsp;&nbsp;
                <button class="btn btn-default icon-btn" type="button" onclick="limpiarBusqueda()"><i class="fa fa-fw fa-lg fa-times-circle"></i>Limpiar</button>-->
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- Contenido de la pagina -->
            <div class="card">
              <div class="card-title">
                <h3 class="card-title" align="center">Detalles del Pago</h3>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Departamento</th>
                        <th>Cargo</th>
                        <th>Empleado</th>
                        <th>Sueldo Base</th>
                        <th id="dedIHSSPorc">Deduccion IHSS</th>
                        <th id="dedEspPorc">Deduccion Especial</th>
                        <th>Sueldo Neto</th>
                        <th>Fecha</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <input type="hidden" class="form-control" id="cod_dep" >
                        <td><input type="text" class="form-control" id="departamento" placeholder="Departamento" value="" required readonly></td>
                        <input type="hidden" class="form-control" id="cod_cargo" >
                        <td><input type="text" class="form-control" id="cargo" placeholder="Cargo" value="" required readonly></td>
                        <input type="hidden" class="form-control" id="id_empleado" >
                        <td><input type="text" class="form-control" id="empleado" placeholder="Empleado" value="" required readonly></td>
                        <td><input type="number" min="0" onchange="calculo()" onkeyup="calculo()" class="form-control" id="sueldo_base" placeholder="Sueldo Base" value="" readonly></td>
                        <td><input type="number" min="0" onchange="calculo()" onkeyup="calculo()" class="form-control" id="ded_IHSS" placeholder="Porcentaje" value="" readonly></td>
                        <td><input type="number" min="0" onchange="calculo()" onkeyup="calculo()" class="form-control" id="ded_Esp" placeholder="Porcentaje" value="" readonly></td>
                        <td><input type="number" min="0" onchange="calculo()" onkeyup="calculo()" class="form-control" id="sueldo_neto" placeholder="Sueldo Neto" value="" required readonly></td>
                        <td><input type="text" class="form-control" id="fecha" placeholder="Fecha" value="" readonly></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <br><br>
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Modificaci&oacute;n de Pago</h3>
                  </div>
                  <div class="panel-body">
                    <div class="row m-10" align="center">
                      <div class="form-group col-lg-12">
                        <div class="has-error col-md-4">
                          <label>Cantidad a Restar</label>
                          <input class="form-control col-lg-4" type="number" min="0" id="inputError" name="valor_restar" onchange="calculoExtra()" onkeyup="calculoExtra()" placeholder="Ingrese el valor que se disminuir&aacute;" value="" required>
                        </div>
                        <div class="has-success col-md-4">
                          <label>Cantidad a Sumar</label>
                          <input class="form-control col-lg-4" type="number" min="0" id="inputSuccess" name="valor_sumar" onchange="calculoExtra()" onkeyup="calculoExtra()" placeholder="Ingrese el valor que se aumentar&aacute;" value="" required>
                        </div>
                        <div class="col-md-4">
                          <label>Pago Extra</label>
                          <input class="form-control col-lg-4" type="number" min="0" id="pago_extra" name="pago_extra" placeholder="Pago Extra" value="" disabled>
                        </div>
                      </div>
                      <br><br>
                      <div class="form-group has-warning col-lg-12">
                        <div class="col-md-12">
                        <label>Descripci&oacute;n</label>
                        <textarea class="form-control col-lg-6" id="inputWarning" name="descripcion_extra" placeholder="Ingrese una descripci&oacute;n para el registro del cambio" value="" required></textarea>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-footer" align="center">
                <button class="btn btn-primary icon-btn" type="button" id="modificar" name="modificar"><i class="fa fa-fw fa-lg fa-check-circle"></i>Modificar Pago</button>
                &nbsp;&nbsp;&nbsp;
                <button class="btn btn-default icon-btn" type="button" id="limpiarTodoModificar"><i class="fa fa-fw fa-lg fa-times-circle"></i>Limpiar</button>
              </div>
            </div>
            <!-- Fin del contenido de la pagina -->
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/tips/pagos_calculos.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-notify.min.js"></script>
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