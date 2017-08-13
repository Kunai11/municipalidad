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
        <div class="row user">
          <div class="col-md-12">
            <div class="profile">
              <div class="info"><img class="user-img" src="images/user.png">
                <h4><?php echo $_SESSION['username']; ?></h4>
                <p><?php echo $_SESSION['rank']; ?></p>
              </div>
              <div class="cover-image"></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card p-0">
              <ul class="nav nav-tabs nav-stacked user-tabs">
                <li class="active"><a href="#user-timeline" data-toggle="tab">Perfil de Empleado</a></li>
                <li><a href="#user-settings" data-toggle="tab">Editar Perfil de Usuario</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-9">
            <div class="tab-content">
              <div class="tab-pane active" id="user-timeline">
                <div class="timeline">
                  <div class="card user-settings">
                  <h4 class="line-head">Perfil de Empleado</h4>
                  <?php
                    if (($_SESSION['username']=="RootUser")) {
                      $Id_Empleado = 'N/A';
                      $Nombres = 'N/A';
                      $Apellido1 = 'N/A';
                      $Apellido2 = 'N/A';
                      $Lugar_Nac = 'N/A';
                      $Fecha_Nac = 'N/A';
                      $Profesion = 'N/A';
                      $Domicilio = 'N/A';
                      $Telefono = 'N/A';
                      $Fecha_Ingreso = 'N/A';
                      $Correo = 'N/A';
                      $Nombre_Emergencia = 'N/A';
                      $Numero_Emergencia = 'N/A';
                    }
                    if (($_SESSION['username']!="RootUser")) {
                      $queryDatosEmp = mysqli_query($db, "SELECT * FROM empleados WHERE Id_Empleado='".$_SESSION['Id_Empleado']."'") or die(mysqli_error());
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
                    }
                  ?>
                  <form class="form-horizontal" style="align-items:center;" id="formEmp" method="GET" action="empleados_hoja_de_vida.php">
                    <div class="form-group m-10">
                      <div class="form-group col-lg-11">
                        <label class="control-label col-lg-4">Numero de Identidad</label>
                        <div class=" col-lg-8">
                          <input type="hidden" name="Id_Empleado" id="Id_Empleado" value="<?php echo $Id_Empleado;?>">
                          <input class="form-control" type="text"  placeholder="Numero de Identidad" value="<?php echo $Id_Empleado;?>" disabled />
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="form-group col-lg-11">
                        <label class="control-label col-md-4">Nombres</label>
                        <div class=" col-lg-8">
                          <input class="form-control" type="text" placeholder="Ingrese su/sus nombres" value="<?php echo $Nombres;?>" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="form-group m-10">
                      <div class="form-group col-lg-11">
                        <label class="control-label col-md-4">Apellido Paterno</label>
                        <div class=" col-lg-8">
                          <input class="form-control" type="text" placeholder="Ingrese su apellido" value="<?php echo $Apellido1;?>" disabled>
                        </div>
                      </div>
                      <div class="form-group col-lg-11">
                        <label class="control-label col-md-4">Apellido Materno</label>
                        <div class=" col-lg-8">
                          <input class="form-control" type="text" placeholder="Ingrese su apellido" value="<?php echo $Apellido2;?>" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="form-group m-10">
                      <div class="form-group col-lg-11">
                        <label class="control-label col-md-4">Lugar de Nacimiento</label>
                        <div class=" col-lg-8">
                          <input class="form-control" type="text" placeholder="Ingrese su lugar de nacimiento" value="<?php echo $Lugar_Nac;?>" disabled>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="form-group col-lg-11">
                        <label class="control-label col-md-4">Fecha de Nacimiento</label>
                        <div class=" col-lg-8">
                          <input class="form-control" id="demoDate" type="text" placeholder="Seleccione la fecha" value="<?php echo $Fecha_Nac;?>" disabled>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="form-group col-lg-11">
                        <label class="control-label col-md-4">Profesi&oacute;n</label>
                        <div class=" col-lg-8">
                          <input class="form-control" type="text" placeholder="Ingrese su profesi&oacute;n" value="<?php echo $Profesion;?>" disabled>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="form-group col-lg-11">
                        <label class="control-label col-md-4">Domicilio</label>
                        <div class=" col-lg-8">
                          <textarea class="form-control" rows="4" placeholder="Ingrese el lugar de su domicilio" disabled><?php echo $Domicilio;?></textarea>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="form-group col-lg-11">
                        <label class="control-label col-md-4">N&uacute;mero de Tel&eacute;fono</label>
                        <div class=" col-lg-8">
                          <input class="form-control" type="number" min="1" placeholder="Ingrese el numero" value="<?php echo $Telefono;?>" disabled>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="form-group col-lg-11">
                        <label class="control-label col-md-4">Fecha de Ingreso</label>
                        <div class=" col-lg-8">
                          <input class="form-control" id="demoDate2" type="text" placeholder="Seleccione la fecha" value="<?php echo $Fecha_Ingreso;?>" disabled>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="form-group col-lg-11">
                        <label class="control-label col-md-4">Correo Electr&oacute;nico</label>
                        <div class=" col-lg-8">
                          <input class="form-control" id="inputEmail" type="text" placeholder="Ingrese el correo" value="<?php echo $Correo;?>" disabled>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="form-group m-10">
                        <div class="panel panel-info">
                          <div class="panel-heading">
                            <h3 class="panel-title">En caso de emergencia, contactar a</h3>
                          </div>
                          <div class="panel-body">                            
                              <div class="form-group col-lg-11">
                                <label class="control-label col-md-4">Nombre Completo</label>
                                <div class=" col-lg-8">
                                  <input class="form-control" type="text" placeholder="Ingrese el nombre" value="<?php echo $Nombre_Emergencia;?>" disabled>
                                </div>
                              </div>
                              <div class="form-group col-lg-11">
                                <label class="control-label col-md-4">N&uacute;mero de Tel&eacute;fono</label>
                                <div class=" col-lg-8">
                                  <input class="form-control" type="number" min="1" placeholder="Ingrese el numero" value="<?php echo $Numero_Emergencia;?>" disabled>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group" >
                      <div class="col-md-12">
                        <button class="btn btn-primary pull-right" form="formEmp" type="submit" ><i class="fa fa-fw fa-lg fa-file-text-o"></i> Hoja de Vida</button>
                      </div>
                    </div>
                  </form>
                </div>
                </div>
              </div>

              <div class="tab-pane inactive" id="user-settings">
                <div class="card user-settings">
                  <h4 class="line-head">Editar Perfil de Usuario</h4>
                  <form method="POST" action="usuario_modificar_self.php" id="userform">
                    <div class="row m-10">
                      <div class="col-md-6">
                        <label>Codigo de Usuario</label>
                        <input class="form-control" type="text" id="codigoUser" name="codigoUser" value="<?php echo $_SESSION['codigoUsuario']; ?>" disabled />
                      </div>
                    </div>
                    <br />
                    <div class="row m-10">
                      <div class="panel panel-warning">
                        <div class="panel-heading">
                          <h3 class="panel-title">Cambio de Nombre de Usuario</h3>
                        </div>
                        <div class="panel-body">
                          <div class="row m-10">
                            <div class="col-md-6">
                              <label>Nombre de Usuario</label>
                              <input class="form-control col-lg-6" type="text" id="userName" name="userName" placeholder="Ingrese su/sus nombres" value="<?php echo $_SESSION['username']; ?>" required>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row m-10">
                      <div class="panel panel-danger">
                        <div class="panel-heading">
                          <h3 class="panel-title">Cambio de Contrase&ntilde;a</h3>
                        </div>
                        <div class="panel-body">
                          <div class="row m-10">
                            <div class="col-md-6">
                              <label>Contrase&ntilde;a antigua</label>
                              <input class="form-control col-lg-6" type="text" id="oldPass" name="oldPass" placeholder="Ingrese su contrase&ntilde;a" required>
                              <input type="hidden" name="sessionPass" value="<?php echo $_SESSION['pass']; ?>">
                            </div>
                            <div class="col-md-6">
                              <label>Contrase&ntilde;a nueva</label>
                              <input class="form-control col-lg-6" type="text" id="newPass" name="newPass" placeholder="Ingrese su nueva contrase&ntilde;a" required>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-10">
                      <div class="col-md-12">
                        <!--type="submit"-->
                        <button class="btn btn-primary" id="guardar" type="submit" onclik=""><i class="fa fa-fw fa-lg fa-check-circle"></i> Guardar</button>
                      </div>
                    </div>
                  </form>
                </div>
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
    <!--<script src="js/tips/edit_user_self.js"></script>-->
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
      $('#sl').click(function(){
      	$('#tl').loadingBtn();
      	$('#tb').loadingBtn({ text : "Signing In"});
      });
      
      $('#el').click(function(){
      	$('#tl').loadingBtnComplete();
      	$('#tb').loadingBtnComplete({ html : "Sign In"});
      });
      
      $('#demoDate').datepicker({
      	format: "dd/mm/yyyy",
      	autoclose: true,
      	todayHighlight: true
      });
      
      $('#demoSelect').select2();

      $('#demoDate2').datepicker({
      	format: "dd/mm/yyyy",
      	autoclose: true,
      	todayHighlight: true
      });
      
      $('#demoSelect2').select2();
    </script>
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
    <script type="text/javascript" src="js/plugins/bootstrap-notify.min.js"></script>
  </body>
</html>
<?php
    }else {
        header('location: page_denegado.php');
    }
?>