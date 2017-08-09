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
                  <li><a href="page-user.php"><i class="fa fa-user fa-lg"></i> Editar Perfil</a></li>
                  <li><a href="#" class="alert" style="margin:0px;"><i class="fa fa-sign-out fa-lg"></i> Cerrar Sesi&oacute;n</a></li>
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
              <p>John Doe</p>
              <p class="designation">Frontend Developer</p>
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
        <div class="row user">
          <div class="col-md-12">
            <div class="profile">
              <div class="info"><img class="user-img" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg">
                <h4>John Doe</h4>
                <p>FrontEnd Developer</p>
              </div>
              <div class="cover-image"></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card p-0">
              <ul class="nav nav-tabs nav-stacked user-tabs">
                <!--<li class="active"><a href="#user-timeline" data-toggle="tab">Timeline</a></li>-->
                <li><a href="#user-settings" data-toggle="tab">Editar Perfil</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-9">
            <div class="tab-content">
              <!--
              <div class="tab-pane active" id="user-timeline">
                <div class="timeline">
                  <div class="post">
                    <div class="post-media"><a href="#"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg"></a>
                      <div class="content">
                        <h5><a href="#">John Doe</a></h5>
                        <p class="text-muted"><small>2 January at 9:30</small></p>
                      </div>
                    </div>
                    <div class="post-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,	quis tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <ul class="post-utility">
                      <li class="likes"><a href="#"><i class="fa fa-fw fa-lg fa-thumbs-o-up"></i>Like</a></li>
                      <li class="shares"><a href="#"><i class="fa fa-fw fa-lg fa-share"></i>Share</a></li>
                      <li class="comments"><i class="fa fa-fw fa-lg fa-comment-o"></i> 5 Comments</li>
                    </ul>
                  </div>
                  <div class="post">
                    <div class="post-media"><a href="#"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg"></a>
                      <div class="content">
                        <h5><a href="#">John Doe</a></h5>
                        <p class="text-muted"><small>2 January at 9:30</small></p>
                      </div>
                    </div>
                    <div class="post-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,	quis tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <ul class="post-utility">
                      <li class="likes"><a href="#"><i class="fa fa-fw fa-lg fa-thumbs-o-up"></i>Like</a></li>
                      <li class="shares"><a href="#"><i class="fa fa-fw fa-lg fa-share"></i>Share</a></li>
                      <li class="comments"><i class="fa fa-fw fa-lg fa-comment-o"></i> 5 Comments</li>
                    </ul>
                  </div>
                </div>
              </div>
              -->
              <div class="tab-pane active" id="user-settings">
                <div class="card user-settings">
                  <h4 class="line-head">Editar Perfil</h4>
                  <form>
                    <div class="row">
                      <div class="col-md-10 mb-20">
                        <label>Numero de Identidad</label>
                        <input class="form-control" type="text" disabled />
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-10 mb-20">
                        <label>Nombres</label>
                        <input class="form-control" type="text" placeholder="Ingrese su/sus nombres">
                      </div>
                    </div>
                    <div class="row mb-20">
                      <div class="col-md-6">
                        <label>Apellido Paterno</label>
                        <input class="form-control" type="text" placeholder="Ingrese su apellido ">
                      </div>
                      <div class="col-md-6">
                        <label>Apellido Materno</label>
                        <input class="form-control" type="text" placeholder="Ingrese su apellido ">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-10 mb-20">
                        <label>Lugar de Nacimiento</label>
                        <input class="form-control" type="text" placeholder="Ingrese su lugar de nacimiento">
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-10 mb-20">
                        <label>Fecha de Nacimiento</label>
                        <input class="form-control" id="demoDate" type="text" placeholder="Seleccione la fecha">
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-10 mb-20">
                        <label>Profesi&oacute;n</label>
                        <input class="form-control" type="text" placeholder="Ingrese su profesi&oacute;n">
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-10 mb-20">
                        <label>Domicilio</label>
                        <textarea class="form-control" rows="4" placeholder="Ingrese el lugar de su domicilio"></textarea>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-10 mb-20">
                        <label>N&uacute;mero de Tel&eacute;fono</label>
                        <input class="form-control" type="number" min="1" placeholder="Ingrese el numero">
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-10 mb-20">
                        <label>Fecha de Ingreso</label>
                        <input class="form-control" id="demoDate2" type="text" placeholder="Seleccione la fecha">
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-10 mb-20">
                        <label>Correo Electr&oacute;nico</label>
                        <input class="form-control" id="inputEmail" type="text" placeholder="Ingrese el correo">
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-10 mb-20">
                        <h4>En caso de emergencia, contactar a:</h4>
                        <label>Nombre Completo</label>
                        <input class="form-control" type="text" placeholder="Ingrese el nombre">
                      </div>
                      <div class="col-md-10 mb-20">
                        <label>N&uacute;mero de Tel&eacute;fono</label>
                        <input class="form-control" type="number" min="1" placeholder="Ingrese el numero">
                      </div>
                    </div>
                    <div class="row mb-10">
                      <div class="col-md-12">
                        <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i> Guardar</button>
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
  </body>
</html>