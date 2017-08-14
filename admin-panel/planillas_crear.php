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
            <h1><i class="fa fa-plus-square"></i> Crear Nueva Planilla</h1>
            <p>Crear una nueva planilla de pago</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-gears fa-lg"></i></li>
              <li>Planillas de pago</li>
              <li><a href="#">Crear Nueva</a></li>
            </ul>
          </div>
        </div>

        <!-- Inicio del contenido de la pagina "VER COMENTARIO"  -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-title">
                <h3 class="card-title" align="center">Nueva Planilla</h3>
              </div>
              <div class="card-body">
                <form class="form-horizontal" id="crear_planilla" >
                  <div class="form-group">
                    <label class="control-label col-md-3">Codigo de planilla</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="codigo_planilla" id="codigo_planilla" placeholder="Ingresar codigo de planilla" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3">Descripci&oacute;n</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="descripcion_planilla" id="descripcion_planilla" placeholder="Ingresar una breve descripcion" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3">Tipo</label>
                    <div class="col-md-8">
                      <select class="form-control" id="tipo_planilla">
                        <?php 
                          $queryListaCargos=mysqli_query($db, "SELECT * FROM cargos") or die(mysqli_error());
                          while ($rowCargo=mysqli_fetch_array($queryListaCargos)) {
                            echo '<option value="'.$rowCargo['Cod_Cargo'].'">'.$rowCargo['Nom_Cargo'].'</option>';  
                          }
                        ?>
                        </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3">Sueldo Base</label>
                    <div class="col-md-8">
                      <div class="input-group">
                        <span class="input-group-addon" >L</span>
                        <input class="form-control" type="number" min="0" name="sueldo_base" id="sueldo_base" onchange="calculo()" onkeyup="calculo()" placeholder="Ingresar el sueldo base" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3">Deduci&oacute;n por IHSS</label>
                    <div class="col-md-8">
                      <div class="input-group">
                        <span class="input-group-addon" >%</span>
                        <input class="form-control" type="number" min="0" name="deduc_IHSS" id="deduc_IHSS" onchange="calculo()" onkeyup="calculo()" placeholder="Ingresar el porcentaje de la deduccion" required>
                        <span class="input-group-addon" id="valor_deduc_IHSS">Valor deducido (L)</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3">Deducciones Especiales</label>
                    <div class="col-md-8">
                      <div class="input-group">
                        <span class="input-group-addon" >%</span>
                        <input class="form-control" type="number" min="0" name="deduc_Esp" id="deduc_Esp" onchange="calculo()" onkeyup="calculo()" placeholder="Ingresar el porcentaje de la deduccion" required>
                        <span class="input-group-addon" id="valor_deduc_esp">Valor deducido (L)</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3">Sueldo Neto</label>
                    <div class="col-md-8">
                      <div class="input-group">
                        <span class="input-group-addon" >L</span>
                        <input class="form-control" type="number" min="0" name="sueldo_neto" id="sueldo_neto" placeholder="Sueldo Neto" disabled="disabled" required>
                      </div>
                    </div>
                  </div>

                 </form>
              </div>

              <div class="card-footer" align="center">
                <button class="btn btn-primary icon-btn" type="submit" form="crear_planilla" id="guardar" name="guardar"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>
                &nbsp;&nbsp;&nbsp;
                <button class="btn btn-default icon-btn" type="button" onclick="limpiarTodo()"><i class="fa fa-fw fa-lg fa-times-circle"></i>Limpiar</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Final del contenido de la pagina -->
      </div>
    </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Definir script para la notificacion superior en pantalla -->
    <script type="text/javascript" src="js/plugins/bootstrap-notify.min.js"></script>

    <!-- Definir script para calculos -->
    <script src="js/tips/calculos_planilla.js"></script>

    <!-- Definir script para la accion a ejecutar segun ID del boton -->
    <script src="js/tips/planillas_acciones.js"></script>

    <!-- Definir script la alerta de Cerrar Sesion -->
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