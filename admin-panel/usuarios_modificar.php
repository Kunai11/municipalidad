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
            <h1><i class="fa fa-pencil-square-o"></i> Modificar Usuario Existente</h1>
            <p>Modificar un usuario existente y su asignaci&oacute;n</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-user-circle fa-lg"></i></li>
              <li><a href="#">Modificar Existente</a></li>
            </ul>
          </div>
        </div>
        <?php 
          $codigo_usuario_buscar=$_GET['codigo_usuario_buscar'];
          if ($codigo_usuario_buscar==null) {
            $codigo = '';
            $username = '';
            $pass = '';
            $tipo = '';
            $estado = '';
            $idempleado = '';
          } 
          if ($codigo_usuario_buscar!=null) {
            $queryObjeto = mysqli_query($db, "SELECT * FROM usuarios WHERE Cod_Usuario = '".$codigo_usuario_buscar."'") or die(mysqli_error());
            if ($rowObjeto=mysqli_fetch_array($queryObjeto)) {
              $codigo = $rowObjeto['Cod_Usuario'];
              $username = $rowObjeto['Username'];
              $pass = $rowObjeto['Pass'];
              $tipo = $rowObjeto['Tipo'];
              $estado = $rowObjeto['Estado'];
              $idempleado = $rowObjeto['Id_Empleado'];
            } else {
              $codigo = '';
              $username = '';
              $pass = '';
              $tipo = '';
              $estado = '';
              $idempleado = '';
            }
          }            
        ?>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-title">
                <h3 class="card-title" align="center">Buscar Usuario</h3>
              </div>
              <div class="card-body">
                <form class="form-horizontal" id="buscar" method="GET" action="usuarios_modificar.php">
                  <div class="form-group">
                    <label class="control-label col-md-3">Codigo de usuario</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="codigo_usuario_buscar" id="codigo_usuario_buscar" placeholder="Ingresar codigo de usuario" value="<?php echo $codigo;?>" required>
                    </div>
                  </div>
                </form>
              </div>

              <div class="card-footer" align="center">
                <button class="btn btn-primary icon-btn" type="submit" form="buscar" id="buscar" name="buscar"><i class="fa fa-fw fa-lg fa-check-circle"></i>Buscar</button>
                &nbsp;&nbsp;&nbsp;
                <button class="btn btn-default icon-btn" type="button" id="limpiarBusqueda"><i class="fa fa-fw fa-lg fa-times-circle"></i>Limpiar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-title">
                <h3 class="card-title" align="center">Modificar Usuario</h3>
              </div>
              <div class="card-body">
                <form class="form-horizontal">                  
                  <div class="form-group">
                    <label class="control-label col-md-3">Nombre de usuario</label>
                    <div class="col-md-8">
                      <input type="hidden" id="codigo_usuario" value="<?php echo $codigo;?>">
                      <input class="form-control" type="text" name="nombre_usuario" id="nombre_usuario" placeholder="Ingresar nombre de usuario" value="<?php echo $username;?>" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3">Contrase&ntilde;a</label>
                    <div class="col-md-8">
                      <input class="form-control" type="password" name="pass" id="pass" placeholder="Contraseña" value="<?php echo $pass;?>" required>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-md-3">Tipo</label>
                    <div class="col-md-8">
                      <select class="form-control" id="tipo">
                        <?php 
                          if ($tipo=='Administrador') {
                            echo '<option value="Administrador" selected>Administrador</option>';
                            echo '<option value="Estandar">Est&aacute;ndar</option>';
                          } 
                          if ($tipo=='Estandar') {
                            echo '<option value="Administrador">Administrador</option>';
                            echo '<option value="Estandar" selected>Est&aacute;ndar</option>'; 
                          }
                        ?>
                      </select>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-md-3">Estado</label>
                    <div class="col-md-8">
                      <select class="form-control" id="estado">
                        <?php 
                          if ($estado=='Activo') {
                            echo '<option value="Activo" selected>Activo</option>';
                            echo '<option value="Inactivo">Inactivo</option>';
                          } 
                          if ($estado=='Inactivo') {
                            echo '<option value="Activo">Activo</option>';
                            echo '<option value="Inactivo" selected>Inactivo</option>'; 
                          }
                        ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3">Empleado</label>
                    <div class="col-md-8">
                      <select class="form-control" id="Id_Empleado">
                        <?php 
                          $queryListaEmp=mysqli_query($db, "SELECT * FROM empleados") or die(mysqli_error());
                          while ($rowEmp=mysqli_fetch_array($queryListaEmp)) {
                            if ($rowEmp['Id_Empleado']==$rowObjeto['Id_Empleado']) {
                              $val = $rowEmp['Nombres'].' '.$rowEmp['Apellido1'];
                              echo '<option value="'.$rowEmp['Id_Empleado'].'" selected>'.$val.'</option>';  
                            } 
                            if ($rowEmp['Id_Empleado']!=$rowObjeto['Id_Empleado']) {
                              $val = $rowEmp['Nombres'].' '.$rowEmp['Apellido1'];
                              echo '<option value="'.$rowEmp['Id_Empleado'].'">'.$val.'</option>';  
                            }
                          }
                        ?>
                      </select>
                    </div>
                  </div>

                </form>
              </div>
              <div class="card-footer" align="center">
                <button class="btn btn-primary icon-btn" type="button" id="modificar" name="modificar"><i class="fa fa-fw fa-lg fa-check-circle"></i>Modificar</button>
                &nbsp;&nbsp;&nbsp;
                <button class="btn btn-default icon-btn" type="button" id="limpiarForm"><i class="fa fa-fw fa-lg fa-times-circle"></i>Limpiar</button>
              </div>
            </div>
          </div>
        </div>

    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/tips/usuarios_acciones.js"></script>
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