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
              <li class="dropdown notification-menu">
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
              </li>
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                  <li><a href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  <li><a href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
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
            <div class="pull-left image"><img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image"></div>
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
                  <li><a href=""><i class="fa fa-credit-card"></i> Nuevo pago</a></li>
                  <li><a href=""><i class="fa fa-pencil-square-o"></i> Modificar pago</a></li>
                </ul>
                <li class="treeview"><a href="#"><i class="fa fa-clipboard"></i><span>Registro</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-history"></i> Historial</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-user-circle"></i><span>Gesti&oacute;n de Usuarios</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-user-plus"></i> Crear Usuario</a></li>
                <li><a href=""><i class="fa fa-pencil-square-o"></i> Modificar Usuario</a></li>
                <li><a href=""><i class="fa fa-user-times"></i> Eliminar Usuario</a></li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-clipboard"></i><span>Reportes</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-file-text-o"></i> Listado de Departamentos</a></li>
                <li><a href=""><i class="fa fa-file-text-o"></i> Listado de Cargos</a></li>
                <li><a href=""><i class="fa fa-file-text-o"></i> Listado de Empleados</a></li>
                <li><a href=""><i class="fa fa-file-text-o"></i> Listado de Usuarios</a></li>
              </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-search"></i><span>Busqueda</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-search"></i> Buscar Departamento</a></li>
                <li><a href=""><i class="fa fa-search"></i> Buscar Cargo</a></li>
                <li><a href=""><i class="fa fa-search"></i> Buscar Empleado</a></li>
                <li><a href=""><i class="fa fa-search"></i> Buscar Usuario</a></li>
              </ul>
            </li>

             <li class="treeview"><a href="#"><i class="fa fa-gears"></i><span>Configuraci&oacute;n</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                 <li class="treeview"><a href="#"><i class="fa fa-wpforms"></i><span>Planillas predefinidas</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-plus-square"></i> Crear nueva</a></li>
                <li><a href=""><i class="fa fa-pencil-square-o"></i> Modificar existente</a></li>
                <li><a href=""><i class="fa fa-minus-square"></i> Eliminar existente</a></li>
              </ul>
            </ul>
            </li>          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-group"></i>Empleados</h1>
            <p>Registro de empleados</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Gestiones administrativas</li>
              <li>Empleados</li>
              <li><a href="#">  Registro de empleado</a></li>
            </ul>
          </div>
        </div>


       <div class="col-md-6">
            <div class="registro">
              <h3 class="card-title" align="center">Registro de empleado</h3>
              <div class="card-body">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label class="control-label col-md-3">Numero de identidad</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="identidad" id="identidad" placeholder="Ingresar numero de identidad" required>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="control-label col-md-3">Nombre</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingresar nombre" required>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="control-label col-md-3">Primer apellido</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="p_apellido" id="p_apellido" placeholder="Ingresar primer apellido" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3">Segundo apellido</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="s_apellido" id="s_apellido" placeholder="Ingresar segundo apellido">
                    </div>

                  </div>
                   <div class="form-group">
                    <label class="control-label col-md-3">Lugar de nacimiento</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="l_nacimiento" id="l_nacimiento" placeholder="Ingresar lugar de nacimiento">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="control-label col-md-3">Fecha de nacimiento</label>
                    <div class="col-md-8">
                      <input class="form-control" type="date" name="f_nacimiento" id="f_nacimiento" placeholder="Ingresar fecha de nacimiento">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="control-label col-md-3">Profesi&oacute;n</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="profesion" id="profesion" placeholder="Ingresar profesión">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="control-label col-md-3">Domicilio</label>
                    <div class="col-md-8">
                      <textarea class="form-control" rows="4" name="domicilio" id="domicilio" placeholder="Ingresar direccion de domicilio"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3">Tel&eacute;fono</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="telefono" id="telefono" placeholder="Ingresar numero de telefono">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="control-label col-md-3">Fecha de ingreso</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="f_ingreso" id="f_ingreso" placeholder="Ingresar fecha de ingreso">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3">Correo</label>
                    <div class="col-md-8">
                      <input class="form-control col-md-8" type="email" name="correo" id="correo" placeholder="Ingresar direccion de correo electrónico">
                    </div>
                  </div>
                 
                    <div class="form-group">
                    <label class="control-label col-md-3">Nombre emergencia</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="nombre_e" id="nombre_e" placeholder="Ingresar nombre de persona a llamar en caso de emergencia">
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="control-label col-md-3">Numero de emergencia</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" name="numero_e" id="numero_e" placeholder="Numero de persona a llamar en caso de emergencia">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="control-label col-md-3">Estado</label>
                    <div class="col-md-8">
                      <input class="form-control" type="date" name="estado" id="estado" placeholder="Ingresar estado del empleado">
                    </div>
                  </div>

                        
                 
                  
                  <div class="form-group">
                    
                  </div>
                </form>
              </div>
              <div class="card-footer" align="center">
                <button class="btn btn-primary icon-btn" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
              </div>
            </div>
          </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="card-footer">
                <div class="row">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="clearix"></div>
          <div class="col-md-12">
            
                </form>
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
  </body>
</html>